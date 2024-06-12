<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Traits\CalcZvalue;

class Proportion extends Component
{
    use CalcZvalue;

    public $populationSize;
    public $successPopulationSize;
    public $confidence = 95;
    public $propError;
    public $isCalculated = false;
    public $min;
    public $max;

    public function calculate()
    {
        //Ep = z * sqrt(p.(1-p)/n)
        $z = $this->zScore(($this->confidence/100));
        $proportion = $this->successPopulationSize / $this->populationSize;
        $this->propError = $z * sqrt($proportion * (1 - ($proportion)) / $this->populationSize);
        $this->isCalculated = true;
        $this->min = $proportion - $this->propError;
        $this->max = $proportion + $this->propError;
        // dump(['z' => $z, 'proportion' => $proportion, 'ep' => $this->propError]);
    }

    public function render()
    {
        return view('livewire.components.proportion');
    }
}
