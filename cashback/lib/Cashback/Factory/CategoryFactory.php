<?php

namespace Kondrashov\Cashback\Factory;

use Bank\Bank;
use Kondrashov\Kernel\Entity\AbstractEntity;

class CategoryFactory extends AbstractEntity
{
	public function createCollection(array $data): Bank
	{
		return new Bank();
	}
}