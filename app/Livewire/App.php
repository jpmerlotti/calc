<?php

namespace App\Livewire;

use Livewire\Component;

class App extends Component
{
    public $title = 'Home';

    public function render()
    {
        return view('livewire.app');
    }

    // public function calcWithEachValue()
    // {
    //     $this->title = 'CWEV';
    // }

    public function home()
    {
        $this->title = 'Home';
    }
    public function calcWithMedia()
    {
        $this->title = 'CWMND';
    }

    public function calcWithPercentage()
    {
        $this->title = 'CWPND';
    }

    public function findPopulationWithMedia()
    {
        $this->title = 'FPWM';
    }

    public function findPopulationWithProportion()
    {
        $this->title = 'FPWP';
    }
}
