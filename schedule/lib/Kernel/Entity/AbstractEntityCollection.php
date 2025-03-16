<?php

namespace Kondrashov\Schedule\Kernel\Entity;

abstract class AbstractEntityCollection implements \IteratorAggregate, \ArrayAccess
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

	public function isExists(AbstractEntity $entity): bool
	{
		return in_array($entity, $this->getEntities(), true);
	}

	public function offsetGet(mixed $offset): AbstractEntity
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