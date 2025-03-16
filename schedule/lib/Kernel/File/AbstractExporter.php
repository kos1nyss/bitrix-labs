<?php

use Kondrashov\Schedule\Kernel\Entity\AbstractEntityCollection;

abstract class AbstractExporter
{
	abstract public function export(
		string $path,
		AbstractEntityCollection $entityCollection,
	): bool;
}