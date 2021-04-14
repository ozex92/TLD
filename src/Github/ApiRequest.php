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
     * @var JsonResponse
     */
    private $jsonResponse;

    /**
     * ApiRequest constructor.
     * @param DateCalculator $dateCalculator
     */
    public function __construct(JsonResponse $jsonResponse, DateCalculator $dateCalculator)
    {
        $this->dateCalculator = $dateCalculator;

    }
    public function getData($user, $repository, $since, $until)
    {
        $rangeDate = $this->dateCalculator->createWeekRangeDate($since, $until);

        $curl = \curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/repos/guzzle/guzzle/commits');
        curl_setopt($curl, CURLOPT_POSTFIELDS, 'since=1&until=2');
//
        $head = curl_exec($curl);
//        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        dump($curl);
        curl_close($curl);
        die();

//        $client = new Client([
//            'base_uri' => 'https://api.github.com/repos/guzzle/guzzle',
//        ]);
//        $response = $client->request('GET');

//        echo $response->getStatusCode(); // 200
//        echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
//        echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
//        return ;

    }
}