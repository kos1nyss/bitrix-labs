<?php

namespace Kondrashov\Schedule\App\Service\File\Import;

use Kondrashov\Schedule\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Schedule\Kernel\Factory\AbstractEntityFactory;

class CsvImporter extends \AbstractImporter
{
	public function import(
		string $path,
		AbstractEntityFactory $factory,
	): AbstractEntityCollection
	{
		return $factory->createEmptyCollection();
	}
}