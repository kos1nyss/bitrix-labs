<?php

namespace Kondrashov\Schedule\App\Entity\Task;

use Kondrashov\Schedule\App\Entity\Activity\AbstractActivityEntity;
use Kondrashov\Schedule\App\Entity\Event\Event;
use Kondrashov\Schedule\Kernel\Entity\DatePeriod;

class Task extends AbstractActivityEntity
{
	public function toEvent(
		DatePeriod $datePeriod,
	): Event
	{
		return
			(new Event())
				->setName($this->getName())
				->setPriority($this->getPriority())
				->setDatePeriod($datePeriod)
			;
	}
}