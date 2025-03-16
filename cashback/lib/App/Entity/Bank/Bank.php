<?php

namespace Kondrashov\Cashback\App\Entity\Bank;

use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;
use Kondrashov\Cashback\Kernel\Entity\AbstractEntity;

class Bank extends AbstractEntity
{
	private ?string $name;

	private CategoryCollection $monthCategories;

	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function setMonthCategories(CategoryCollection $monthCategories): self
	{
		$this->monthCategories = $monthCategories;

		return $this;
	}

	public function toArray(): array
	{
		return [
			'name' => $this->getName(),
			'monthCategories' => $this->monthCategories->toArray(),
		];
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getMonthCategories(): CategoryCollection
	{
		return $this->monthCategories;
	}
}