<?php

namespace Kondrashov;

use Kondrashov\Zoo\Animal\Animal;
use Kondrashov\Zoo\Animal\AnimalType;
use Kondrashov\Zoo\Enclosure\Enclosure;
use Kondrashov\Zoo\Excursion\Excursion;
use Kondrashov\Zoo\Excursion\Guide\Guide;
use Kondrashov\Zoo\Excursion\Guide\LoudGuide;
use Kondrashov\Zoo\Excursion\Person;
use Kondrashov\Zoo\Excursion\QuickExcursion;
use Kondrashov\Zoo\Feeder\MeatFeeder;
use Kondrashov\Zoo\Notification\AddAnimalNotification;
use Kondrashov\Zoo\Zoo;

class Application
{
	public static function run(): void
	{
		$enclosure = new Enclosure(['tree']);
		$enclosure->attach(new AddAnimalNotification(), Enclosure::EVENT_ADD_ANIMAL);

		$monkeyType = new AnimalType(['tree']);
		$monkey = new Animal($monkeyType, [], ['meat']);
		$monkey->setName('Luke');

		$enclosure->add($monkey);

		$zoo = new Zoo('Kaliningrad Zoo');
		$zoo->add($enclosure);

		(new MeatFeeder())->execute($zoo);

		$excursion = new QuickExcursion($zoo, new LoudGuide());
		$excursion->addMember(new Person());
		$excursion->run();
	}
}