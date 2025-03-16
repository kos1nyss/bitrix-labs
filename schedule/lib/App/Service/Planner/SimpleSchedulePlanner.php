<?php

namespace Kondrashov\Schedule\Kernel;

use DatePeriod;
use Kondrashov\Schedule\App\Entity\Schedule;
use Kondrashov\Schedule\App\Entity\User;
use Kondrashov\Schedule\Kernel\Entity\ActivityCollection;
use Kondrashov\Schedule\Kernel\Entity\EventCollection;

class SimpleSchedulePlanner extends AbstractSchedulePlanner
{
	public function plan(
		User $user,
		ActivityCollection $activities,
		DatePeriod $datePeriod,
	): Schedule
	{
		return
			(new Schedule())
				->setDatePeriod($datePeriod)
				->setEvents(new EventCollection(...[]))
			;
	}
}