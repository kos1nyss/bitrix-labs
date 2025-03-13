<?php

namespace Kondrashov\Cashback\File\Reader;

abstract class AbstractFileWriter
{
	abstract function write(FileContent $value): void;
}