<?php

namespace Kondrashov\Cashback\Kernel\Factory;

use Kondrashov\Cashback\Kernel\Entity\AbstractEntity;
use Kondrashov\Cashback\Kernel\Entity\EntityCollection;

abstract class AbstractEntityFactory
{
	abstract public function mapFromArray(array $data): AbstractEntity;

	abstract public function createEmptyCollection(): EntityCollection;
}