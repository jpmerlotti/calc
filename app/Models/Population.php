<?php

namespace App\Models;

class Population 
{
    public function __construct(
        protected int $populationSize,
        protected array $populationSurveyData
    ){}

    public static function make(int $populationSize, array $populationSurveyData): self
    {
        return new static($populationSize, $populationSurveyData);
    }

    public function calcMedia(): float|int
    {
        if (count($this->populationSurveyData) === 1) {
            return $this->populationSurveyData[0];
        } else {
            return array_sum($this->populationSurveyData) / $this->populationSize;
        }
    }

    public function calcStdDeviation(): float|int
    {
        $sum = 0;
        foreach ($this->populationSurveyData as $value) {
            $sum += ($value - $this->calcMedia()) ** 2;
        }
        return sqrt($sum / $this->populationSize);   
    }

    public function calcStdError(): float|int
    {
        return $this->calcStdDeviation() / sqrt($this->populationSize);
    }
}
