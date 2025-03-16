<?php

namespace Kondrashov\Schedule\Kernel\Entity;

use DateTime;

abstract class AbstractActivityEntity extends AbstractEntity
{
	private int $priority;
	private string $name;

	public function setPriority(int $priority): self
	{
		$this->priority = $priority;

		return $this;
	}

	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function getPriority(): ?int
	{
		return $this->priority;
	}

	public function getName(): string
	{
		return $this->name;
	}
}