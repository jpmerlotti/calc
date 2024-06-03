<?php

namespace App\Livewire\Forms;

use App\Traits\CalcZvalue;
use Livewire\Component;

class FindPopulationWithProportionForm extends Component
{
    use CalcZvalue;

    public $confidence = 95;
    public $populationSize;
    public $percentage;
    public $stdError;
    public $isCalculated = false;

    public function calculate()
    {
        //N = ((z * s)/Em) ^ 2
        $this->percentage /= 100;
        $this->stdError = str_replace(',', '.', $this->stdError);
        $z = $this->zScore($this->confidence/100);
        $this->populationSize = ceil((($z ** 2) * ($this->percentage * (1 - $this->percentage)) / ($this->stdError ** 2)) ** 2);
        $this->isCalculated = true;
    }
    public function render()
    {
        return view('livewire.forms.find-population-with-proportion-form');
    }
}
