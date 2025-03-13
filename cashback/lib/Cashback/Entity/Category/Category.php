<?php

namespace Category;

use Kondrashov\Kernel\Entity\AbstractEntity;

class Category extends AbstractEntity
{
	private string $name;
	private ?int $percent;

	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setPercent(string $percent): self
	{
		$this->percent = $percent;

		return $this;
	}

	public function getPercent(): ?int
	{
		return $this->percent;
	}
}