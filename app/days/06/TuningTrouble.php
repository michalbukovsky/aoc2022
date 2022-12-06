<?php declare(strict_types = 1);

namespace App;

use App\Utils\Input;

class TuningTrouble implements IDay
{
    public function runPart1(Input $data): string
    {
        return $this->runPart($data, 4);
    }


    public function runPart2(Input $data): string
    {
        return $this->runPart($data, 14);
    }


    private function runPart(Input $data, int $length): string
    {
        $dataString = $data->getAsString();
        $i = 0;

        do {
            $substring = substr($dataString, $i, $length);
            if (strlen(count_chars($substring, 3)) === $length) {
                break;
            }

            $i++;
        } while (strlen($substring) === $length);

        return (string) ($i + $length);
    }


    public function getExpectedTestResult1(): ?string
    {
        return '11';
    }


    public function getExpectedTestResult2(): ?string
    {
        return '26';
    }
}
