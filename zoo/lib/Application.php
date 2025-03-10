<?php

namespace Kondrashov;

use Kondrashov\Zoo\Animal\AnimalType;
use Kondrashov\Zoo\Animal\Animal;
use Kondrashov\Zoo\Enclosure\Enclosure;
use Kondrashov\Zoo\Excursion\Excursion;
use Kondrashov\Zoo\Excursion\Guide;
use Kondrashov\Zoo\Excursion\Person;
use Kondrashov\Zoo\Notification\AddAnimalNotification;
use Kondrashov\Zoo\Zoo;
use Kondrashov\Zoo\ZooFeeder;

class Application
{
	public static function run(): void
	{
		$enclosure = new Enclosure(['tree']);
		$enclosure->attach(new AddAnimalNotification(), Enclosure::EVENT_ADD_ANIMAL);

		$monkeyType = new AnimalType(['tree']);
		$monkey = new Animal($monkeyType, [], ['meat']);
		$monkey->setName('Luke');

		$enclosure->addAnimal($monkey);

		$zoo = new Zoo('Kaliningrad Zoo');
		$zoo->addEnclosure($enclosure);

		(new ZooFeeder())->execute($zoo);

		$excursion = new Excursion($zoo, new Guide());
		$excursion->addMember(new Person());
		$excursion->run();
	}
}