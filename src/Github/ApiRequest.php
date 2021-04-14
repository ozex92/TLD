<?php
namespace App\Github;

use GuzzleHttp\Client;
use App\Utils\DateCalculator;

class ApiRequest
{
    /**
     * @var DateCalculator
     */
    private $dateCalculator;

    /**
     * @var JsonResponseFormatter
     */
    private $jsonResponseFormatter;

    /**
     * ApiRequest constructor.
     * @param DateCalculator $dateCalculator
     */
    public function __construct(JsonResponseFormatter $jsonResponseFormatter, DateCalculator $dateCalculator)
    {
        $this->dateCalculator = $dateCalculator;
        $this->jsonResponseFormatter = $jsonResponseFormatter;
    }

    /**
     * @param $user
     * @param $repository
     * @param $since
     * @param $until
     * @return mixed
     */
    public function getData($user, $repository, $since, $until)
    {
        $rangeDate = $this->dateCalculator->createWeekRangeDate($since, $until);

        return $this->jsonResponseFormatter->format($rangeDate);
    }
}