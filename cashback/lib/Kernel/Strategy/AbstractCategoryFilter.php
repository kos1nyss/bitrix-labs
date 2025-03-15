<?php

namespace Bitrix\Kernel\Strategy;

use Kondrashov\Cashback\Entity\Category\CategoryCollection;

abstract class AbstractCategoryFilter
{
	private CategoryCollection $categories;

	public function setCategories(CategoryCollection $categories): void
	{
		$this->categories = $categories;
	}

	abstract public function filterByPriority(
		CategoryCollection $priorityCategories,
		int $limit,
	): ?CategoryCollection;

	public function getCategories(): CategoryCollection
	{
		return $this->categories;
	}
}