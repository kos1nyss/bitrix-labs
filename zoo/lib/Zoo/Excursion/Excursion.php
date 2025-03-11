<?php

namespace Kondrashov\Zoo\Excursion;

use Kondrashov\Zoo\Excursion\Guide\Guide;
use Kondrashov\Zoo\Zoo;

abstract class Excursion
{
	private array $members = [];

	public function __construct(
		private Zoo $zoo,
		private Guide $guide,
	)
	{}

	abstract public function run(): void;

	public function getZoo(): Zoo
	{
		return $this->zoo;
	}

	public function getGuide(): Guide
	{
		return $this->guide;
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