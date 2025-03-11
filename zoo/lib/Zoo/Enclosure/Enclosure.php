<?php

namespace Kondrashov\Zoo\Enclosure;

use Kondrashov\Zoo\Animal\Animal;
use Kondrashov\Zoo\Animal\AnimalCollection;

use Kondrashov\Zoo\ZooComponent;
use Kondrashov\Zoo\ZooLeaf;
use RuntimeException;
use SplSubject;

class Enclosure implements ZooComponent, SplSubject
{
	const string EVENT_ADD_ANIMAL = 'EVENT_ADD_ANIMAL';

	private AnimalCollection $animalCollection;

	public function __construct(
		private array $conditions = [],
		private array $observers = [],
	)
	{
		$this->animalCollection = new AnimalCollection();
		$this->observers["*"] = [];
	}

	public function feed(array $food): void
	{
		foreach ($this->getAnimalCollection() as $animal)
		{
			if (!$animal->canEat($food))
			{
				continue;
			}

			$animal->feed($food);
		}
	}

	/**
	 * @return AnimalCollection
	 */
	public function getAnimalCollection(): AnimalCollection
	{
		return $this->animalCollection;
	}

	public function add(ZooLeaf $leaf): bool
	{
		if (!($leaf instanceof Animal))
		{
			return false;
		}

		if (!$this->canKeptAnimal($leaf))
		{
			throw new RuntimeException('Animal can\'t be added');
		}

		if ($this->animalCollection->isExists($leaf))
		{
			return false;
		}

		$this->animalCollection[] = $leaf;
		$this->notify(
			self::EVENT_ADD_ANIMAL,
			[
				'animal' => $leaf,
			],
		);

		return true;
	}

	public function canKeptAnimal(Animal $animal): bool
	{
		return true;
	}

	public function getConditions(): array
	{
		return $this->conditions;
	}

	public function attach(\SplObserver $observer, string $event = "*"): void
	{
		$this->initEventGroup($event);

		$this->observers[$event][] = $observer;
	}

	public function detach(\SplObserver $observer, string $event = "*"): void
	{
		foreach ($this->getEventObservers($event) as $key => $s)
		{
			if ($s === $observer) {
				unset($this->observers[$event][$key]);
			}
		}
	}

	public function notify(string $event = "*", $data = null): void
	{
		foreach ($this->getEventObservers($event) as $observer)
		{
			$observer->update($this, $event, $data);
		}
	}

	private function getEventObservers(string $event = "*"): array
	{
		$this->initEventGroup($event);

		$group = $this->observers[$event];
		$all = $this->observers["*"];

		return array_merge($group, $all);
	}

	private function initEventGroup(string $event = "*"): void
	{
		if (!isset($this->observers[$event]))
		{
			$this->observers[$event] = [];
		}
	}
}