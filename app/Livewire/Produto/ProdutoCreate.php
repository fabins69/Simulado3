<?php

namespace App\Livewire\Produto;

use App\Models\Categoria;
use App\Models\Fornecedor;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria_id;
    public $unidade_medida;
    public $preco_custo;
    public $preco_venda;
    public $qtd_estoque;
    public $estoque_min;
    public $fornecedor_id;

    public function store()
    {
        $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'marca' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
            'unidade_medida' => 'required',
            'preco_custo' => 'required',
            'preco_venda' => 'required',
            'qtd_estoque' => 'required',
            'estoque_min' => 'required',
            'fornecedor_id' => 'required|exists:fornecedors,id',
        ]);

        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria_id' => $this->categoria_id,
            'unidade_medida' => $this->unidade_medida,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'qtd_estoque' => $this->qtd_estoque,
            'estoque_min' => $this->estoque_min,
            'fornecedor_id' => $this->fornecedor_id,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );

        return redirect()->route('produtos.index');
    }
    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login');
    }
    public function render()
    {
        $categorias = Categoria::orderBy('nome_categoria')->get();
        $fornecedors = Fornecedor::orderBy('nome')->get();
        return view('livewire.produto.produto-create', compact('categorias', 'fornecedors'));
    }
}
