<?php

namespace Kondrashov\Schedule\Kernel\File;

use Kondrashov\Schedule\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Schedule\Kernel\Factory\AbstractEntityFactory;

abstract class AbstractImporter
{
	abstract public function import(
		string $path,
		AbstractEntityFactory $factory,
	): AbstractEntityCollection;
}