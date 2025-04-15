<?php

namespace App\Livewire\Funcionarios;

use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome, $cpf, $email, $senha;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'cpf' => 'required|string|unique:funcionarios,cpf',
        'email' => 'required|email|unique:funcionarios,email',
        'senha' => 'required|min:6',
    ];

    public function store()
    {
        $this->validate();

        Funcionario::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha), 
        ]);

        session()->flash('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('funcionarios.index');
    }

    public function render()
    {
        return view('livewire.funcionarios.create');
    }
}
