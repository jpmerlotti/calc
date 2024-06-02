<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use App\Enums\zValueEnum;
use App\Traits\CalcZvalue;

class CalcWithMeanAndStdDeviationForm extends Component
{
    use CalcZvalue;

    public $confidence = 95;
    public $populationSize;
    public $mean;
    public $stdDeviation;
    public bool $isCalculated = false;
    public $stdError;
    public $confidenceInterval;

    public function render()
    {
        return view('livewire.forms.calc-with-mean-and-std-deviation-form');
    }

    public function calculate(): void
    {
        $this->mean = str_replace(',', '.', $this->mean);
        $this->stdDeviation = str_replace(',', '.', $this->stdDeviation);
        $this->confidence /= 100;
        $z = $this->zScore($this->confidence);
        $this->stdError = $z * ($this->stdDeviation / sqrt($this->populationSize));
        $this->confidenceInterval = [
            "min" => $this->mean - $this->stdError,
            "max" => $this->mean + $this->stdError
        ];
        dump($z);
        $this->isCalculated = true;
    }
}
