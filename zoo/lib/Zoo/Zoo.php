<?php

namespace Kondrashov\Zoo;

use Kondrashov\Zoo\Enclosure\Enclosure;

class Zoo implements Feedable
{
	private array $enclosures = [];

	public function __construct(
		private string $name,
	)
	{

	}

	public function getName(): string
	{
		return $this->name;
	}

	public function addEnclosure(Enclosure $enclosure): bool
	{
		if (in_array($enclosure, $this->getEnclosures(), true))
		{
			return false;
		}

		$this->enclosures[] = $enclosure;

		return true;
	}

	public function feed(array $food): void
	{
		foreach ($this->getEnclosures() as $enclosure)
		{
			$enclosure->feed($food);
		}
	}

	/**
	 * @return Enclosure[]
	 */
	public function getEnclosures(): array
	{
		return $this->enclosures;
	}
}