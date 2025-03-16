<?php

namespace Kondrashov\Cashback\Kernel\File;

use Kondrashov\Cashback\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Cashback\Kernel\Factory\AbstractEntityFactory;

abstract class AbstractImporter
{
	abstract public function import(
		string $path,
		AbstractEntityFactory $factory,
	): AbstractEntityCollection;
}