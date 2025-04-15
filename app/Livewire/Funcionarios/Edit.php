<?php

namespace App\Livewire\Funcionarios;

use App\Models\Funcionario;
use Livewire\Component;

class Edit extends Component
{
    public $funcionario;
    public $nome, $cpf, $email, $senha;

    public function mount(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
        $this->nome = $funcionario->nome;
        $this->cpf = $funcionario->cpf;
        $this->email = $funcionario->email;
    }

    public function update()
    {
        $this->validate([
            'nome' => 'required|string',
            'cpf' => 'required|unique:funcionarios,cpf,' . $this->funcionario->id,
            'email' => 'required|email|unique:funcionarios,email,' . $this->funcionario->id,
        ]);

        $this->funcionario->update([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Funcionário atualizado!');
        return redirect()->route('funcionarios.index');
    }

    public function render()
    {
        return view('livewire.funcionarios.edit');
    }
}
