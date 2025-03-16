<?php

namespace Kondrashov\Schedule\App\Service\Planner;

use Kondrashov\Schedule\App\Entity\Activity\ActivityCollection;
use Kondrashov\Schedule\App\Entity\Schedule\Schedule;
use Kondrashov\Schedule\App\Entity\User\User;
use Kondrashov\Schedule\Kernel\Entity\DatePeriod;

abstract class AbstractSchedulePlanner
{
	abstract public function plan(
		User $user,
		ActivityCollection $activities,
		DatePeriod $datePeriod,
	): Schedule;
}