<?php

namespace Kondrashov\Schedule\Kernel;

use Kondrashov\Schedule\App\Entity\Schedule;
use Kondrashov\Schedule\Kernel\Entity\AbstractScheduleEntityCollection;

abstract class AbstractSchedulePlanner
{
	abstract public function plan(AbstractScheduleEntityCollection $scheduleEntityCollection): Schedule;
}