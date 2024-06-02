<?php

namespace App\Livewire\Forms;

use App\Traits\CalcZvalue;
use Livewire\Component;

class FindPopulationWithMediaForm extends Component
{
    use CalcZvalue;

    public $confidence = 95;
    public $populationSize;
    public $stdDeviation;
    public $stdError;
    public $isCalculated = false;

    public function calculate()
    {
        //N = ((z * s)/Em) ^ 2
        $this->stdDeviation = str_replace(',', '.', $this->stdDeviation);
        $this->stdError = str_replace(',', '.', $this->stdError);
        $z = $this->zScore($this->confidence/100);
        $this->populationSize = round((($z * $this->stdDeviation) / $this->stdError) ** 2);
        $this->isCalculated = true;
    }

    public function render()
    {
        return view('livewire.forms.find-population-with-media-form');
    }
}
