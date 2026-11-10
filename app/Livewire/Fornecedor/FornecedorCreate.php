<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorCreate extends Component
{

    public $nome;
    public $cnpj_cpf;
    public $telefone;
    public $endereco;
    public $email;

    public function store()
    {
        $this->validate([
            'nome' => 'required',
            'cnpj_cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'email' => 'required|unique:fornecedors,email',
        ]);

        Fornecedor::create([
            'nome' => $this->nome,
            'cnpj_cpf' => $this->cnpj_cpf,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'email' => $this->email,
        ]);

        session()->flash(
            'success',
            'Fornecedor cadastrado com sucesso!'


        );
        return redirect()->route('fornecedores.index');
    }

    public function render()
    {
        return view('livewire.fornecedor.fornecedor-create');
    }
}
