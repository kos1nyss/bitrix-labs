<?php

namespace Kondrashov\Zoo\Enclosure;

use Kondrashov\Event\EventCode;
use Kondrashov\Event\EventManager;
use Kondrashov\Zoo\Animal\Animal;
use Kondrashov\Zoo\Animal\AnimalCollection;
use Kondrashov\Zoo\Feedable;

use RuntimeException;

class Enclosure implements Feedable
{
	private AnimalCollection $animals;

	public function __construct(
		private array $conditions = [],
	)
	{
		$this->animals = new AnimalCollection();
	}

	public function feed(array $food): void
	{
		foreach ($this->getAnimals() as $animal)
		{
			var_dump($animal->getName());
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
	public function getAnimals(): AnimalCollection
	{
		return $this->animals;
	}

	public function addAnimal(Animal $animal): bool
	{
		if (!$this->canKeptAnimal($animal))
		{
			throw new RuntimeException('Animal can\'t be added');
		}

		if ($this->animals->isExists($animal))
		{
			return false;
		}

		$this->animals->add($animal);
		EventManager::getInstance()->runEvent(
			EventCode::ADD_ANIMAL,
			[
				'animal' => $animal,
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
}