<?php

namespace Kondrashov\Zoo\Animal;

use http\Exception\RuntimeException;
use Kondrashov\Zoo\Feedable;

class Animal implements Feedable
{
	private ?string $name = null;
	private ?string $description = null;
	private ?int $age = null;

	public function __construct(
		private AnimalType $type,
		private array $personalConditions,
		private array $allowedFood,
	)
	{

	}

	public function feed(array $food): void
	{
		if (!$this->canEat($food))
		{
			throw new RuntimeException('Animal can\'t eat this food');
		}
	}

	public function canEat(array $food): bool
	{
		return true;
	}

	public function getAllowedFood(): array
	{
		return $this->allowedFood;
	}

	public function setName(string $name): void
	{
		$this->name = $name;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setDescription(string $description): void
	{
		$this->description = $description;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setAge(int $age): void
	{
		$this->age = $age;
	}

	public function getAge(): ?int
	{
		return $this->age;
	}

	public function getConditions(): array
	{
		return
			array_unique(
				[
					...$this->getType()->getConditions(),
					...$this->getPersonalConditions(),
				],
			);
	}

	public function getType(): AnimalType
	{
		return $this->type;
	}

	private function getPersonalConditions(): array
	{
		return $this->personalConditions;
	}
}