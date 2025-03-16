<?php

namespace Kondrashov\Cashback;

use Kondrashov\Cashback\App\Entity\Bank\Bank;
use Kondrashov\Cashback\App\Entity\Category\Category;
use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;
use Kondrashov\Cashback\App\Entity\User\User;
use Kondrashov\Cashback\App\Factory\CategoryFactory;
use Kondrashov\Cashback\App\Service\CategoryFilter\SimpleCategoryFilter;
use Kondrashov\Cashback\App\Service\File\Export\CsvExporter;
use Kondrashov\Cashback\App\Service\File\Import\CsvImporter;

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
				->setPriorityCategories(
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
				->setMonthCategories(
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
					$bank->getMonthCategories(),
					$user->getPriorityCategories(),
					3,
				)
		;

		$csvExporter = new CsvExporter();
		$csvExporter->export('filtered-categories.csv', $filteredCategories);

		$csvImporter = new CsvImporter();
		$otherCategories = $csvImporter->import('other-categories.csv', new CategoryFactory());
	}
}