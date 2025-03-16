<?php

namespace Kondrashov\Schedule\App\Entity;

use DatePeriod;
use Kondrashov\Schedule\Kernel\Entity\AbstractActivityEntity;

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