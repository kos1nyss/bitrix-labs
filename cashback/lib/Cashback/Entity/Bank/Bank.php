<?php

namespace Bank;

use Category\CategoryCollection;
use Kondrashov\Kernel\Entity\AbstractEntity;

class Bank extends AbstractEntity
{
	private ?string $name;

	private CategoryCollection $categoryCollection;

	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setCategoryCollection(CategoryCollection $categoryCollection): self
	{
		$this->categoryCollection = $categoryCollection;

		return $this;
	}

	public function getCategoryCollection(): CategoryCollection
	{
		return $this->categoryCollection;
	}
}