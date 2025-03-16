<?php

namespace Kondrashov\Cashback\App\Service\File\Import;

use Kondrashov\Cashback\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Cashback\Kernel\Factory\AbstractEntityFactory;
use Kondrashov\Cashback\Kernel\File\AbstractImporter;

class CsvImporter extends AbstractImporter
{
	public function import(
		string $path,
		AbstractEntityFactory $factory,
	): AbstractEntityCollection
	{
		return $factory->createEmptyCollection();
	}
}