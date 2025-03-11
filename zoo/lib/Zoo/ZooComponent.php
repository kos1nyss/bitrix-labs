<?php

namespace Kondrashov\Zoo;

use Kondrashov\Zoo\ZooLeaf;

interface ZooComponent extends ZooLeaf
{
	public function add(ZooLeaf $leaf): bool;
}