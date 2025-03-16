<?php

namespace Kondrashov\Cashback\App\Factory;

use Kondrashov\Cashback\Kernel\Entity\AbstractEntity;
use Kondrashov\Cashback\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Cashback\Kernel\Factory\AbstractEntityFactory;
use Kondrashov\Cashback\App\Entity\Bank\Bank;
use Kondrashov\Cashback\App\Entity\Bank\BankCollection;

class BankFactory extends AbstractEntityFactory
{
	public function mapFromArray(array $data): AbstractEntity
	{
		return new Bank();
	}

	public function createEmptyCollection(): AbstractEntityCollection
	{
		return new BankCollection();
	}
}