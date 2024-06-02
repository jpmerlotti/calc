<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class CalcWithEachValueForm extends Component
{
    public $values = [];

    public int $value = 0;

    public function addValue()
    {
        $this->values += [floatval($this->value)];
        unset($this->value);
    }
    public function render()
    {
        return view('livewire.forms.calc-with-each-value-form');
    }
}
