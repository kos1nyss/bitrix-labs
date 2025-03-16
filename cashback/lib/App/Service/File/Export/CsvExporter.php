<?php

namespace Kondrashov\Cashback\App\Service\File\Export;

use Kondrashov\Cashback\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Cashback\Kernel\File\AbstractExporter;

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