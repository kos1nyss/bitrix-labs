<?php

namespace Kondrashov\Cashback\App\Service\CategoryFilter;

use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;

class SimpleCategoryFilter extends AbstractCategoryFilter
{
	public function filterByPriority(
		CategoryCollection $categoryCollection,
		CategoryCollection $priorityCategories,
		int $limit,
	): CategoryCollection
	{
		return new CategoryCollection();
	}
}