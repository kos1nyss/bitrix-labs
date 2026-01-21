<?php

namespace Kondrashov\Schedule\App\Entity\User;

use Kondrashov\Schedule\Kernel\Entity\AbstractEntity;
use Kondrashov\Schedule\Kernel\Entity\DatePeriod;

class User extends AbstractEntity
{
	private DatePeriod $workingHours;
	private array $workingDays;

	public function setWorkingHours(DatePeriod $workingHours): self
	{
		$this->workingHours = $workingHours;

		return $this;
	}

	public function setWorkingDays(array $workingDays): self
	{
		$this->workingDays = $workingDays;

		return $this;
	}

	public function toArray(): array
	{
		return [
			'workingHours' => $this->getWorkingHours(),
			'workingDays' => $this->getWorkingDays(),
		];
	}

	public function getWorkingHours(): DatePeriod
	{
		return $this->workingHours;
	}


	public function getWorkingDays(): array
	{
		return $this->workingDays;
	}
}