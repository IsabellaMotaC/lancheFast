<?php

namespace App\Livewire\Clientes;

use Livewire\Component;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required',
        'endereco' => 'required',
        'telefone' => 'required',
        'cpf' => 'required|digits:11|unique:clientes,cpf',
        'email' => 'required|email|unique:clientes,email',
        'senha' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required' => 'Nome obrigatório',
        'endereco.required' => 'Endereço obrigatório',
        'telefone.required' => 'Telefone obrigatório',
        'cpf.required' => 'CPF obrigatório',
        'cpf.unique' => 'CPF já cadastrado',
        'cpf.digits' => 'CPF deve conter exatamente 11 dígitos',
        'email.required' => 'Email obrigatório',
        'email.unique' => 'Email já cadastrado',
        'email.email' => 'Formato de email inválido',
        'senha.required' => 'Senha obrigatória',
        'senha.min' => 'A senha deve conter no mínimo 6 caracteres'
    ];

    public function store()
    {
        $this->validate();

        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha), // Corrigido aqui
        ]);

        session()->flash('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.create');
    }
}

