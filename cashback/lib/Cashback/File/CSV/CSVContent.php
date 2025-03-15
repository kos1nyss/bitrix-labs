<?php

namespace Kondrashov\Cashback\File\CSV;

use Kondrashov\Cashback\File\Reader\FileContent;

class CSVContent extends FileContent
{
	public function getRows(): array
	{
		return [];
	}
}