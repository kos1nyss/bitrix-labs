<?php

namespace Kondrashov\Cashback;

use Kondrashov\Cashback\App\Entity\Bank\Bank;
use Kondrashov\Cashback\App\Entity\Category\Category;
use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;
use Kondrashov\Cashback\App\Entity\User\User;
use Kondrashov\Cashback\App\Service\CategoryFilter\SimpleCategoryFilter;

class Application
{
	public static function run(): void
	{
		$productsCategory =
			(new Category())
				->setName('Продукты')
				->setPercent(5)
		;

		$user =
			(new User())
				->setPriorityCategoryCollection(
					new CategoryCollection(
						[
							$productsCategory,
						]
					)
				)
		;
		$bank =
			(new Bank())
				->setName('Альфа-Банк')
				->setMonthCategoryCollection(
					(
						new CategoryCollection(
							[
								$productsCategory,
								(new Category())
									->setName('Бытовая техника')
									->setPercent(7.5),
							]
						)
					)
				)
		;

		$categoryFilter = new SimpleCategoryFilter();
		$filteredCategories =
			$categoryFilter
				->filterByPriority(
					$bank->getMonthCategoryCollection(),
					$user->getPriorityCategoryCollection(),
					3,
				)
		;
	}
}