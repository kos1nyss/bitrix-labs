<?php

namespace Kondrashov\Event;

abstract class Handler
{
	abstract public function run(array $parameters): void;
}