<?php

namespace App\Traits;

trait calcMediaWithEachValue
{
    public function calcMedia(): float|int
    {
        if (count($this->populationSurveyData) === 1) {
            return $this->populationSurveyData[0];
        } else {
            return array_sum($this->populationSurveyData) / $this->populationSize;
        }
    }
}
