<?php

namespace App\Livewire\Funcionarios;

use App\Models\Funcionario;
use Livewire\Component;

class Index extends Component
{
    public  $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10]
    ];


    public function render()
    {
        $funcionarios = Funcionario::where('nome', 'like', "%{$this->search}%")
        ->orWhere('email', 'like', "%{$this->search}%")
        ->orWhere('cpf', 'like', "%{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.funcionarios.index', compact('funcionarios'));
    }

    public function delete($id)
    {
        Funcionario::findOrFail($id)->delete();
        session()->flash('message', 'Funcionario deletado com sucesso.');
    }
}
