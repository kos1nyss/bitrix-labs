<?php

namespace Kondrashov\Cashback\File;

use Kondrashov\Cashback\File\Reader\AbstractFileReader;

class CSVReader extends AbstractFileReader
{
	public function read(string $filename): CSVContent
	{
		return new CSVContent();
	}
}