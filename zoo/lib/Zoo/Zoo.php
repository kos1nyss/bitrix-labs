<?php

namespace Kondrashov\Zoo;

use Kondrashov\Zoo\Enclosure\Enclosure;

class Zoo implements ZooComponent
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

	public function add(ZooLeaf $leaf): bool
	{
		if (in_array($leaf, $this->getEnclosures(), true))
		{
			return false;
		}

		$this->enclosures[] = $leaf;

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