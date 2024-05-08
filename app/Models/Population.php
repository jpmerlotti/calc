<?php

namespace App\Models;

use App\Traits\calcMediaWithEachValue; 
use App\Traits\calcMediaWithP; 
use App\Traits\calcStandardDeviation; 
use App\Traits\calcStandardError;

class Population 
{
    use calcMediaWithEachValue, calcMediaWithP, calcStandardDeviation, calcStandardError;
    public function __construct(
        protected int $populationSize,
        protected array $populationSurveyData
    ){}

    public static function make(int $populationSize, array $populationSurveyData): self
    {
        return new static($populationSize, $populationSurveyData);
    }
}
