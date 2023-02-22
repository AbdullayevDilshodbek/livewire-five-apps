<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1 = 0;
    public $num2 = 0;

    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        try {
            $num1 = (float) $this->num1;
            $num2 = (float) $this->num2;
            switch ($this->action) {
                case '-':
                    $this->result = $num1 - $num2;
                    break;
                case '+':
                    $this->result = $num1 + $num2;
                    break;
                case '/':
                    $this->result = $num1 / $num2;
                    break;
                case '*':
                    $this->result = $num1 * $num2;
                    break;
                case '%':
                    $this->result = $num1 / 100 * $num2;
                    break;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updated($property)
    {
        if ($this->num1 == '' || $this->num2 == '') {
            return ($this->disabled = true);
        } else {
            return ($this->disabled = false);
        }
    }
}
