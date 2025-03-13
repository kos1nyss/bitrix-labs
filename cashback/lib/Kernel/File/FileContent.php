<?php

namespace Kondrashov\Cashback\File\Reader;

class FileContent
{
	private mixed $data;

	public function __construct(mixed $data)
	{
		$this->data = $data;
	}

	public function getData(): mixed
	{
		return $this->data;
	}
}