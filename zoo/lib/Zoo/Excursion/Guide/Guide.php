<?php

namespace Kondrashov\Zoo\Excursion\Guide;

use Kondrashov\Zoo\Animal\Animal;
use Kondrashov\Zoo\Excursion\Person;

abstract class Guide extends Person
{
	abstract public function tellAboutAnimal(Animal $animal): void;
}