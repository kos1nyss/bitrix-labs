<?php

namespace Kondrashov\Zoo\Animal;

class AnimalCollection implements \IteratorAggregate, \ArrayAccess
{
	public function __construct(
		private array $animals = []
	)
	{
	}

	public function getIterator(): \Traversable
	{
		return new \ArrayIterator($this->getAnimals());
	}

	public function isExists(Animal $animal): bool
	{
		return in_array($animal, $this->getAnimals(), true);
	}

	public function offsetGet(mixed $offset): mixed
	{
		return $this->getAnimals()[$offset];
	}

	private function getAnimals(): array
	{
		return $this->animals;
	}

	public function offsetExists(mixed $offset): bool
	{
		return isset($this->animals[$offset]);
	}

	public function offsetSet(mixed $offset, mixed $value): void
	{
		if (is_null($offset)) {
			$this->animals[] = $value;
		} else {
			$this->animals[$offset] = $value;
		}
	}

	public function offsetUnset(mixed $offset): void
	{
		unset($this->animals[$offset]);
	}
}