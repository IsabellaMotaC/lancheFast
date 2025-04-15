<?php

namespace App\Livewire\Funcionarios;

use App\Models\Funcionario;
use Livewire\Component;

class Show extends Component
{
    public $funcionario;

    public function mount(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    public function render()
    {
        return view('livewire.funcionarios.show');
    }
}
