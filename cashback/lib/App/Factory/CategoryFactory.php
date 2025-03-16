<?php

namespace Kondrashov\Cashback\App\Factory;

use Kondrashov\Cashback\App\Entity\Category\Category;
use Kondrashov\Cashback\App\Entity\Category\CategoryCollection;
use Kondrashov\Cashback\Kernel\Factory\AbstractEntityFactory;
use Kondrashov\Cashback\Kernel\Entity\AbstractEntity;
use Kondrashov\Cashback\Kernel\Entity\AbstractEntityCollection;

class CategoryFactory extends AbstractEntityFactory
{
	public function mapFromArray(array $data): AbstractEntity
	{
		return new Category();
	}

	public function createEmptyCollection(): AbstractEntityCollection
	{
		return new CategoryCollection();
	}
}