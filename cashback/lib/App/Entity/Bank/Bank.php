<?php

namespace Kondrashov\Cashback\App\Entity\Bank;

use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;
use Kondrashov\Cashback\Kernel\Entity\AbstractEntity;

class Bank extends AbstractEntity
{
	private ?string $name;

	private CategoryCollection $monthCategoryCollection;

	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function setMonthCategoryCollection(CategoryCollection $monthCategoryCollection): self
	{
		$this->monthCategoryCollection = $monthCategoryCollection;

		return $this;
	}

	public function toArray(): array
	{
		return [
			'name' => $this->getName(),
			'monthCategoryCollection' => $this->monthCategoryCollection->toArray(),
		];
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getMonthCategoryCollection(): CategoryCollection
	{
		return $this->monthCategoryCollection;
	}
}