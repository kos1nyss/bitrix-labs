<?php

namespace Kondrashov\Schedule\App\Entity\Event;

use Kondrashov\Schedule\App\Entity\Activity\AbstractActivityEntity;
use Kondrashov\Schedule\Kernel\Entity\DatePeriod;

class Event extends AbstractActivityEntity
{
	private DatePeriod $datePeriod;

	public function setDatePeriod(DatePeriod $datePeriod): self
	{
		$this->datePeriod = $datePeriod;

		return $this;
	}

	public function toArray(): array
	{
		return [
			'datePeriod' => $this->getDatePeriod()->toArray(),
			...parent::toArray(),
		];
	}

	public function getDatePeriod(): DatePeriod
	{
		return $this->datePeriod;
	}
}