<?php

namespace User;

use Category\CategoryCollection;
use Kondrashov\Kernel\Entity\AbstractEntity;

class User extends AbstractEntity
{
	private CategoryCollection $priorityCategoryCollection;

	public function setPriorityCategoryCollection(CategoryCollection $categoryCollection): self
	{
		$this->priorityCategoryCollection = $categoryCollection;

		return $this;
	}

	public function getPriorityCategoryCollection(): CategoryCollection
	{
		return $this->priorityCategoryCollection;
	}
}