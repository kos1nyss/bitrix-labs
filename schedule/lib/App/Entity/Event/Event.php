<?php

namespace Kondrashov\Schedule\App\Entity;

use DatePeriod;
use Kondrashov\Schedule\Kernel\Entity\AbstractActivityEntity;

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
			'datePeriod' => $this->getDatePeriod(),
			...parent::toArray(),
		];
	}

	public function getDatePeriod(): DatePeriod
	{
		return $this->datePeriod;
	}
}