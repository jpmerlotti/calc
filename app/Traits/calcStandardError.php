<?php

namespace App\Traits;

trait calcStandardError
{
    public function calcStdError(): float|int
    {
        return $this->calcStdDeviation() / sqrt($this->populationSize);
    }
}
