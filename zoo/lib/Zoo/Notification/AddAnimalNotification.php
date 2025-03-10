<?php

namespace Kondrashov\Zoo\Notification;

use Kondrashov\Zoo\Enclosure\Enclosure;
use SplSubject;

class AddAnimalNotification implements \SplObserver
{
	public function update(SplSubject $subject, ?string $eventName = null, array $data = []): void
	{
		if (
			!($subject instanceof Enclosure)
			|| $eventName !== Enclosure::EVENT_ADD_ANIMAL
		)
		{
			return;
		}

		if (!isset($data['animal']))
		{
			return;
		}

		$animal = $data['animal'];
		$animalName = ($animal->getName()) ?: 'New animal';

		echo "{$animalName} has a new house!" . PHP_EOL;
	}
}