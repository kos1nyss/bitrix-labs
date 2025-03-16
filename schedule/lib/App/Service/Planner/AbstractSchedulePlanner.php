<?php

namespace Kondrashov\Schedule\Kernel;

use DatePeriod;
use Kondrashov\Schedule\App\Entity\Schedule;
use Kondrashov\Schedule\App\Entity\User;
use Kondrashov\Schedule\Kernel\Entity\ActivityCollection;

abstract class AbstractSchedulePlanner
{
	abstract public function plan(
		User $user,
		ActivityCollection $activities,
		DatePeriod $datePeriod,
	): Schedule;
}