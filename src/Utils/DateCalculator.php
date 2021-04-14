<?php
namespace App\Utils;

class DateCalculator
{
    /**
     * @param int $since
     * @param int $until
     * @return string[]
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
     * @return string
     * @throws \Exception
     */
    private function createDatetimeByWeek(int $week)
    {
        $datetime = new \DateTime(sprintf('-%s week', $week));
        return $datetime->format(\DateTimeInterface::ISO8601);
    }
}