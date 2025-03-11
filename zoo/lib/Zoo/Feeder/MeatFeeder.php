<?php

namespace Kondrashov\Zoo\Feeder;

use Kondrashov\Zoo\ZooLeaf;

class MeatFeeder
{
	public function execute(ZooLeaf $zoo): void
	{
		$zoo->feed(['meat']);
	}
}