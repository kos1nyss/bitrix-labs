<?php

namespace Kondrashov\Zoo;

class ZooFeeder
{
	public function execute(Zoo $zoo): void
	{
		$zoo->feed([]);
	}
}