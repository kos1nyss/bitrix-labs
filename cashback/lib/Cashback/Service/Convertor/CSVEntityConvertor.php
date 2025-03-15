<?php

namespace Kondrashov\Cashback\Service\Convertor;

use Kondrashov\Cashback\File\CSV\CSVContent;
use Kondrashov\Kernel\Entity\EntityCollection;
use Kondrashov\Kernel\Factory\AbstractEntityFactory;

readonly class CSVEntityConvertor
{
	public function __construct(
		private AbstractEntityFactory $factory,
	)
	{
	}

	public function convertFromCSV(CSVContent $content): EntityCollection
	{
		return $this->getFactory()->createEmptyCollection();
	}

	private function getFactory(): AbstractEntityFactory
	{
		return $this->factory;
	}

	public function convertToCSV(EntityCollection $collection): CSVContent
	{
		return new CSVContent();
	}
}