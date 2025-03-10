<?php

namespace Kondrashov\Zoo\Excursion;

use Kondrashov\Zoo\Zoo;

class Excursion
{
	private array $members = [];

	public function __construct(
		private Zoo $zoo,
		private Guide $guide,
	)
	{}

	public function run(): void
	{
		foreach ($this->getZoo()->getEnclosures() as $enclosure)
		{
		}
	}

	public function getZoo(): Zoo
	{
		return $this->zoo;
	}

	public function addMember(Person $member): bool
	{
		if (!in_array($member, $this->getMembers(), true))
		{
			return false;
		}

		$this->members[] = $member;

		return true;
	}

	public function getMembers(): array
	{
		return $this->members;
	}
}