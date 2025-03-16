<?php

namespace Kondrashov\Schedule\App\Entity\Schedule;

use Kondrashov\Schedule\App\Entity\Event\EventCollection;
use Kondrashov\Schedule\Kernel\Entity\AbstractEntity;
use Kondrashov\Schedule\Kernel\Entity\DatePeriod;

class Schedule extends AbstractEntity
{
	private EventCollection $events;
	private DatePeriod $datePeriod;

	public function setEvents(EventCollection $events): self
	{
		$this->events = $events;

		return $this;
	}

	public function setDatePeriod(DatePeriod $datePeriod): self
	{
		$this->datePeriod = $datePeriod;

		return $this;
	}

	public function toArray(): array
	{
		return [
			'events' => $this->getEvents()->toArray(),
			'datePeriod' => $this->getDatePeriod()->toArray(),
		];
	}

	public function getEvents(): EventCollection
	{
		return $this->events;
	}

	public function getDatePeriod(): DatePeriod
	{
		return $this->datePeriod;
	}
}