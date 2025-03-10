<?php

namespace Kondrashov\Zoo\Handler;

use Kondrashov\Event\Handler;
use Kondrashov\Zoo\Animal\Animal;

class AddAnimalHandler extends Handler
{
	public function run(array $parameters): void
	{
		if (!isset(
			$parameters['animal'],
		))
		{
			return;
		}

		/**
		 * @var $animal Animal
		 */
		$animal = $parameters['animal'];

		$animalName = ($animal->getName()) ?: 'New animal';

		echo "{$animalName} has a new house!" . PHP_EOL;
	}
}