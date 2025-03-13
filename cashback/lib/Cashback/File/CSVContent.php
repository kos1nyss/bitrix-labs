<?php

namespace Kondrashov\Cashback\File;

use Kondrashov\Cashback\File\Reader\FileContent;

class CSVContent extends FileContent
{
	public function getColumns(): array
	{
		return [];
	}
}