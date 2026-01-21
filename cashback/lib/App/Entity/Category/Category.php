<?php

namespace Kondrashov\Cashback\App\Entity\Category;

use Kondrashov\Cashback\Kernel\Entity\AbstractEntity;

class Category extends AbstractEntity
{
	private string $name;
	private float $percent;

	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function setPercent(float $percent): self
	{
		$this->percent = $percent;

		return $this;
	}

	public function toArray(): array
	{
		return [
			'name' => $this->getName(),
			'percent' => $this->getPercent(),
		];
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getPercent(): float
	{
		return $this->percent;
	}
}