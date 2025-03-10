<?php

namespace Kondrashov\Zoo\Feeder;

use Kondrashov\Zoo\Zoo;

abstract class Feeder
{
	abstract public function execute(Zoo $zoo): void;
}