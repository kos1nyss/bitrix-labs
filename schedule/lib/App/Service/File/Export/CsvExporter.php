<?php

namespace Kondrashov\Schedule\App\Service\File\Export;

use Kondrashov\Schedule\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Schedule\Kernel\File\AbstractExporter;

class CsvExporter extends AbstractExporter
{
	public function export(
		string $path,
		AbstractEntityCollection $entityCollection,
	): bool
	{
		$data = $entityCollection->toArray();

		return true;
	}
}