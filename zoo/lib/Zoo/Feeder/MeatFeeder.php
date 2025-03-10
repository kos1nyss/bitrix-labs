<?php

namespace Kondrashov\Zoo\Feeder;

use Kondrashov\Zoo\Zoo;

class MeatFeeder
{
	public function execute(Zoo $zoo): void
	{
		$zoo->feed(['meat']);
	}
}