<?php

namespace Kondrashov\Schedule\App\Entity;

use DateTime;
use Kondrashov\Schedule\Kernel\Entity\AbstractScheduleEntityCollection;

class Schedule
{
	private AbstractScheduleEntityCollection $scheduleEntityCollection;
	private DateTime $from;
	private DateTime $to;

	public function setScheduleEntityCollection(AbstractScheduleEntityCollection $scheduleEntityCollection): void
	{
		$this->scheduleEntityCollection = $scheduleEntityCollection;
	}

	public function getScheduleEntityCollection(): AbstractScheduleEntityCollection
	{
		return $this->scheduleEntityCollection;
	}

	public function setFrom(DateTime $from): self
	{
		$this->from = $from;

		return $this;
	}

	public function setTo(DateTime $to): self
	{
		$this->to = $to;

		return $this;
	}

	public function getFrom(): DateTime
	{
		return $this->from;
	}

	public function getTo(): DateTime
	{
		return $this->to;
	}
}