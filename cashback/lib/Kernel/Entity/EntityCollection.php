<?php

namespace Kondrashov\Cashback\Kernel\Entity;

class EntityCollection implements \IteratorAggregate, \ArrayAccess, Arrayable
{
	public function __construct(
		private array $entities = []
	)
	{
	}

	public function getIterator(): \Traversable
	{
		return new \ArrayIterator($this->getEntities());
	}

	public function isExists(AbstractEntity $animal): bool
	{
		return in_array($animal, $this->getEntities(), true);
	}

	public function offsetGet(mixed $offset): mixed
	{
		return $this->getEntities()()[$offset];
	}

	private function getEntities(): array
	{
		return $this->entities;
	}

	public function offsetExists(mixed $offset): bool
	{
		return isset($this->entities[$offset]);
	}

	public function offsetSet(mixed $offset, mixed $value): void
	{
		if (is_null($offset)) {
			$this->entities[] = $value;
		} else {
			$this->entities[$offset] = $value;
		}
	}

	public function offsetUnset(mixed $offset): void
	{
		unset($this->entities[$offset]);
	}

	public function toArray(): array
	{
		$array = [];

		foreach ($this->getEntities() as $entity)
		{
			$array[] = $entity->toArray();
		}

		return $array;
	}
}