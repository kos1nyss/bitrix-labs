<?php

namespace Kondrashov\Schedule\App\Entity\Activity;

use Kondrashov\Schedule\Kernel\Entity\AbstractEntity;

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

	public function toArray(): array
	{
		return [
			'priority' => $this->getPriority(),
			'name' => $this->getName(),
		];
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