<?php

namespace Kondrashov\Cashback\App\Entity\User;

use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;
use Kondrashov\Cashback\Kernel\Entity\AbstractEntity;

class User extends AbstractEntity
{
	private CategoryCollection $priorityCategoryCollection;

	public function setPriorityCategoryCollection(CategoryCollection $categoryCollection): self
	{
		$this->priorityCategoryCollection = $categoryCollection;

		return $this;
	}

	public function toArray(): array
	{
		return [
			'priorityCategory' => $this->getPriorityCategoryCollection()->toArray(),
		];
	}

	public function getPriorityCategoryCollection(): CategoryCollection
	{
		return $this->priorityCategoryCollection;
	}
}