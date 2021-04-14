<?php
namespace App\Utils;

class DateCalculator
{
    /**
     * @param int $since
     * @param int $until
     * @return \DateTime[]
     */
    public function createWeekRangeDate($since = 4, $until = 0)
    {
        return [
            'since' => $this->createDatetimeByWeek($since),
            'until' => $this->createDatetimeByWeek($until),
        ];
    }

    /**
     * @param int $week
     * @return \DateTime
     * @throws \Exception
     */
    private function createDatetimeByWeek(int $week)
    {
        return new \DateTime(sprintf('-%s week', $week));
    }
}