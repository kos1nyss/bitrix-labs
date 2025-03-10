<?php

namespace Kondrashov\Event;

class EventManager
{
	private static ?self $instance = null;

	private array $subscribers = [];

	private function __construct()
	{}

	public static function getInstance(): self
	{
		if (!isset(self::$instance))
		{
			self::$instance = new static();
		}

		return self::$instance;
	}

	public function runEvent(string $eventCode, array $parameters): void
	{
		foreach ($this->getSubscribersByEventName($eventCode) as $subscriber)
		{
			$subscriber->run($parameters);
		}
	}

	/**
	 * @return Handler[]
	 */
	private function getSubscribersByEventName(string $eventCode): array
	{
		return $this->subscribers[$eventCode] ?? [];
	}

	public function subscribe(string $eventCode, Handler $handler): void
	{
		$this->subscribers[$eventCode][] = $handler;
	}
}