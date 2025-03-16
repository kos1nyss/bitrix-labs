<?php

namespace Kondrashov\Schedule\App\Service\File\Import;

use Kondrashov\Schedule\Kernel\Entity\AbstractEntityCollection;

class CsvExporter extends \AbstractExporter
{
	public function export(
		string $path,
		AbstractEntityCollection $entityCollection,
	): bool
	{
		return true;
	}
}