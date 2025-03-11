<?php

namespace Kondrashov\Zoo\Feeder;

use Kondrashov\Zoo\Feedable;

abstract class Feeder
{
	abstract public function execute(Feedable $zoo): void;
}