<?php

namespace App\Livewire\Components;

use App\Traits\CalcZvalue;
use Livewire\Component;

class Percentage extends Component
{
    use CalcZvalue;

    public $percentage;
    public $populationSize;
    public $confidence = 95;
    public $propError;
    public $isCalculated = false;

    public function calculate()
    {
        //Ep = z * sqrt(p.(1-p)/n)
        $this->percentage /= 100;
        $z = $this->zScore($this->confidence/100);
        $this->propError = $z * sqrt($this->percentage * (1 - $this->percentage) / $this->populationSize);
        $this->isCalculated = true;
    }

    public function render()
    {
        return view('livewire.components.percentage');
    }
}
