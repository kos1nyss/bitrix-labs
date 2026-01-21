<?php

namespace Kondrashov\Cashback\App\Service\CategoryFilter;

use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;

abstract class AbstractCategoryFilter
{
	abstract public function filterByPriority(
		CategoryCollection $categoryCollection,
		CategoryCollection $priorityCategories,
		int $limit,
	): CategoryCollection;
}