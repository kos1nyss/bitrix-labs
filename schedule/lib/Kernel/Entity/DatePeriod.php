<?php

namespace Kondrashov\Schedule\Kernel\Entity;

use DateMalformedStringException;
use DateTime;
use DateTimeInterface;

class DatePeriod extends AbstractEntity
{
	public function __construct(
		private readonly DateTime $from,
		private readonly DateTime $to,
	)
	{

	}

	/**
	 * @throws DateMalformedStringException
	 */
	public static function createFromStrings(
		string $from,
		string $to,
	): DatePeriod
	{
		return
			new self(
				new DateTime($from),
				new DateTime($to),
			);
	}

	public function toArray(): array
	{
		return [
			'from' => $this->getFrom()->format(DateTimeInterface::RFC3339),
			'to' => $this->getTo()->format(DateTimeInterface::RFC3339),
		];
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