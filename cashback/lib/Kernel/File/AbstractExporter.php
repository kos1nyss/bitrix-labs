<?php

namespace Kondrashov\Cashback\Kernel\File;

use Kondrashov\Cashback\Kernel\Entity\AbstractEntityCollection;

abstract class AbstractExporter
{
	abstract public function export(
		string $path,
		AbstractEntityCollection $entityCollection,
	): bool;
}