<?php

namespace Kondrashov\Kernel\Factory;

use Kondrashov\Kernel\Entity\AbstractEntity;
use Kondrashov\Kernel\Entity\EntityCollection;

abstract class AbstractEntityFactory
{
	abstract public function mapFromArray(array $data): AbstractEntity;

	abstract public function createEmptyCollection(): EntityCollection;
}