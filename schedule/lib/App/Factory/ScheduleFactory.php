<?php

namespace Kondrashov\Schedule\App\Factory;

use Kondrashov\Schedule\App\Entity\Schedule\Schedule;
use Kondrashov\Schedule\App\Entity\Schedule\ScheduleCollection;
use Kondrashov\Schedule\Kernel\Entity\AbstractEntity;
use Kondrashov\Schedule\Kernel\Entity\AbstractEntityCollection;
use Kondrashov\Schedule\Kernel\Factory\AbstractEntityFactory;

class ScheduleFactory extends AbstractEntityFactory
{
	public function mapFromArray(array $data): AbstractEntity
	{
		return new Schedule();
	}

	public function createEmptyCollection(): AbstractEntityCollection
	{
		return new ScheduleCollection();
	}
}