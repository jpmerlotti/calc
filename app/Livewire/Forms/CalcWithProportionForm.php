<?php

namespace App\Livewire\Forms;

use App\Traits\CalcZvalue;
use Livewire\Component;

class CalcWithProportionForm extends Component
{
    use CalcZvalue;

    public $method = 'CPTA';

    public function render()
    {
        return view('livewire.forms.calc-with-proportion-form');
    }

    public function calcWithProportionSize()
    {
        $this->method = 'CPTA';
    }

    public function calcWithPercentage()
    {
        $this->method = 'CPS';
    }
}
