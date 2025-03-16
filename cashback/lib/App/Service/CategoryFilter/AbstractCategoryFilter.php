<?php

namespace Kondrashov\Cashback\App\Service\CategoryFilter;

use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;

abstract class AbstractCategoryFilter
{
	private CategoryCollection $categories;

	public function setCategories(CategoryCollection $categories): void
	{
		$this->categories = $categories;
	}

	abstract public function filterByPriority(
		CategoryCollection $categoryCollection,
		CategoryCollection $priorityCategories,
		int  $limit,
	): ?CategoryCollection;

	public function getCategories(): CategoryCollection
	{
		return $this->categories;
	}
}