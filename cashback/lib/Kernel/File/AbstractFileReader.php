<?php

namespace Kondrashov\Cashback\File\Reader;

abstract class AbstractFileReader
{
	public function read(string $filename): FileContent
	{
		return new FileContent();
	}
}