<?php

namespace App\Traits;

trait calcStandardDeviation
{
    public function calcStdDeviation(): float|int
    {
        $sum = 0;
        foreach ($this->populationSurveyData as $value) {
            $sum += ($value - $this->calcMedia()) ** 2;
        }
        return sqrt($sum / $this->populationSize);   
    }
}
