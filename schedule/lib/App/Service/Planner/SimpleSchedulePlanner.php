<?php

namespace Kondrashov\Schedule\Kernel;

use Kondrashov\Schedule\App\Entity\Schedule;
use Kondrashov\Schedule\Kernel\Entity\AbstractScheduleEntityCollection;

class SimpleSchedulePlanner extends AbstractSchedulePlanner
{
	public function plan(AbstractScheduleEntityCollection $scheduleEntityCollection): Schedule
	{
		return new Schedule();
	}
}