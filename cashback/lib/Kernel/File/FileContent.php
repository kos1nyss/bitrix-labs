<?php

namespace Kondrashov\Cashback\File\Reader;

class FileContent
{
	private string $content = '';

	public function setContent(string $content): void
	{
		$this->content = $content;
	}

	public function getContent(): string
	{
		return $this->content;
	}
}