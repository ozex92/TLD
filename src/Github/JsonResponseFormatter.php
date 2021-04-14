<?php
namespace App\Github;

class JsonResponseFormatter
{
    public function format(array $data)
    {
        $data = $this->getData();
        $formattedData = [];

        foreach ($data as $value) {
            $formattedData[] = $value;
        }

        return $formattedData;
    }

    /**
     * Better with api call ....
     *
     * @return array[]
     */
    private function getData()
    {
        return [
            0 => [
                "year" =>  2021,
                "week" => rand(0,4),
                "count" => 2,
                "commits" => [
                    'First commit',
                    'second commit',
                ]
            ],
            1 => [
                "year" =>  2021,
                "week" => rand(0,4),
                "count" => 2,
                "commits" => [
                    'First commit',
                    'second commit',
                ]
            ],
            2 => [
                "year" =>  2021,
                "week" => rand(0,4),
                "count" => 2,
                "commits" => [
                    'First commit',
                    'second commit',
            ]],
            3 => [
                "year" =>  2021,
                "week" => rand(0,4),
                "count" => 2,
                "commits" => [
                    'First commit',
                    'second commit',
            ]],
            4 => [
            "year" =>  2021,
            "week" => rand(0,4),
            "count" => 2,
            "commits" => [
                'First commit',
                'second commit',
            ]],
        ];
    }
}