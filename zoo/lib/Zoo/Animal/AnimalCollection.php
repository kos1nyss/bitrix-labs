<?php
namespace Kondrashov\Zoo\Animal;

use Traversable;

class AnimalCollection implements \IteratorAggregate
{
	public function __construct(
		private array $animals = []
	)
	{
	}

	public function getIterator(): Traversable
	{
		return new \ArrayIterator($this->getAnimals());
	}

	public function add(Animal $animal): Animal
	{
		return $this->animals[] = $animal;
	}

	public function isExists(Animal $animal): bool
	{
		return in_array($animal, $this->getAnimals(), true);
	}

	private function getAnimals(): array
	{
		return $this->animals;
	}

}