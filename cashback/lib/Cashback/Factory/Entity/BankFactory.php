<?php

namespace Kondrashov\Cashback\Factory\Entity;

use Bank\Bank;
use Kondrashov\Cashback\Entity\Bank\BankCollection;
use Kondrashov\Kernel\Entity\EntityCollection;
use Kondrashov\Kernel\Factory\AbstractEntityFactory;

class BankFactory extends AbstractEntityFactory
{
	public function mapFromArray(array $data): Bank
	{
		return new Bank();
	}

	public function createEmptyCollection(): EntityCollection
	{
		return new BankCollection();
	}
}