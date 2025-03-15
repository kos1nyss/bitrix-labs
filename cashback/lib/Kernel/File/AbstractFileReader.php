<?php

namespace Kondrashov\Cashback\File\Reader;

abstract class AbstractFileReader
{
	abstract public function read(string $filename): FileContent;
}