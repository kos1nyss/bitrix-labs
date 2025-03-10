<?php

namespace Kondrashov\Zoo\Enclosure;

use Kondrashov\Event\EventCode;
use Kondrashov\Event\EventManager;
use Kondrashov\Zoo\Animal\Animal;
use Kondrashov\Zoo\Feedable;

use RuntimeException;

class Enclosure implements Feedable
{
	private array $animals = [];

	public function __construct(
		private array $conditions,
	)
	{
	}

	public function feed(array $food): void
	{
		foreach ($this->getAnimals() as $animal)
		{
			if (!$animal->canEat($food))
			{
				continue;
			}

			$animal->feed($food);
		}
	}

	/**
	 * @return Animal[]
	 */
	public function getAnimals(): array
	{
		return $this->animals;
	}

	public function addAnimal(Animal $animal): bool
	{
		if (!$this->canAnimalKept($animal))
		{
			throw new RuntimeException('Animal can\'t be added');
		}

		if (in_array($animal, $this->getAnimals(), true))
		{
			return false;
		}

		$this->animals[] = $animal;
		EventManager::getInstance()->runEvent(
			EventCode::ADD_ANIMAL,
			[
				'animal' => $animal,
			],
		);

		return true;
	}

	public function canAnimalKept(Animal $animal): bool
	{
		return true;
	}

	public function getConditions(): array
	{
		return $this->conditions;
	}
}