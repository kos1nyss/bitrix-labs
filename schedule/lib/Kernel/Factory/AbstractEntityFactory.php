<?php

namespace Kondrashov\Schedule\Kernel\Factory;

use Kondrashov\Schedule\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Schedule\Kernel\Entity\AbstractEntity;

abstract class AbstractEntityFactory
{
	abstract public function mapFromArray(array $data): AbstractEntity;

	abstract public function createEmptyCollection(): AbstractEntityCollection;
}