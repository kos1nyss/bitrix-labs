<?php

namespace Kondrashov\Zoo\Animal;

class AnimalType
{
	public function __construct(
		private array $conditions,
	)
	{}

	public function getConditions(): array
	{
		return $this->conditions;
	}
}