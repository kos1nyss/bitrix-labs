<?php

namespace Kondrashov\Kernel\Factory;

use Kondrashov\Kernel\Entity\AbstractEntity;
use Kondrashov\Kernel\Entity\EntityCollection;

abstract class AbstractEntityFactory
{
	public function createEntityCollection(array $data): EntityCollection
	{
		$entityCollection = new EntityCollection();

		foreach ($data as $entity)
		{
			$entityCollection[] = $this->createCollection($entity);
		}

		return $entityCollection;
	}

	abstract public function createCollection(array $data): AbstractEntity;
}