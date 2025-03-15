<?php

namespace Kondrashov\Cashback\File\Reader;

abstract class AbstractFileWriter
{
	abstract public function write(FileContent $value): void;
}