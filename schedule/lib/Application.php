<?php

namespace Kondrashov\Schedule;


use Kondrashov\Schedule\App\Entity\Activity\ActivityCollection;
use Kondrashov\Schedule\App\Entity\Event\Event;
use Kondrashov\Schedule\App\Entity\Schedule\ScheduleCollection;
use Kondrashov\Schedule\App\Entity\Task\Task;
use Kondrashov\Schedule\App\Entity\User\User;
use Kondrashov\Schedule\App\Factory\ScheduleFactory;
use Kondrashov\Schedule\App\Service\File\Export\CsvExporter;
use Kondrashov\Schedule\App\Service\File\Import\CsvImporter;
use Kondrashov\Schedule\Kernel\Entity\DatePeriod;
use Kondrashov\Schedule\App\Service\Planner\SimpleSchedulePlanner;

class Application
{
	public static function run(): void
	{
		$user =
			(new User())
				->setWorkingHours(
					DatePeriod::createFromStrings(
						'09:00:00',
						'18:00:00',
					),
				)
				->setWorkingDays(
					[
						'Mon',
						'Tue',
					]
				)
		;

		$activities = new ActivityCollection();
		$activities[] =
			(new Task())
				->setName('Убраться дома')
				->setPriority(3)
		;
		$activities[] =
			(new Event())
				->setName('Планирование спринта')
				->setDatePeriod(
					DatePeriod::createFromStrings(
						'17.03.2025 15:00:00',
						'17.03.2025 16:00:00',
					),
				)
				->setPriority(8)
		;

		$schedulePlanner = new SimpleSchedulePlanner();
		$schedule =
			$schedulePlanner
				->plan(
					$user,
					$activities,
					DatePeriod::createFromStrings(
						'17.03.2025 09:00:00',
						'21.03.2025 18:00:00',
					),
				)
		;

		$csvExporter = new CsvExporter();
		$csvExporter->export('schedule.csv', new ScheduleCollection([$schedule]));

		$csvImporter = new CsvImporter();
		$otherSchedule =
			$csvImporter
				->import('other-schedule.csv', new ScheduleFactory())
				->getFirstItem()
		;
	}
}