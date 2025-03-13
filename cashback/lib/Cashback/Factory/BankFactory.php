<?php

namespace Kondrashov\Cashback\Factory;

use Bank\Bank;
use Kondrashov\Kernel\Entity\AbstractEntity;

class BankFactory extends AbstractEntity
{
	public function createCollection(array $data): Bank
	{
		return new Bank();
	}
}