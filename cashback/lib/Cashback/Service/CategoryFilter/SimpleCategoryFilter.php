<?php

namespace Bitrix\Cashback\Service\CategoryFilterStrategy;

use Bitrix\Kernel\Strategy\AbstractCategoryFilter;
use Kondrashov\Cashback\Entity\Category\CategoryCollection;

class SimpleCategoryFilter extends AbstractCategoryFilter
{
	public function filterByPriority(
		CategoryCollection $priorityCategoryCollection,
		int $limit,
	): ?CategoryCollection
	{
		return new CategoryCollection();
	}
}