<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{

    public $nome_categoria;
   

    public function store()
    {
        $this->validate([
            'nome_categoria' => 'required',
        ]);

        Categoria::create([
            'nome_categoria' => $this->nome_categoria,
        ]);

        session()->flash(
            'success',
            'Categoria cadastrada com sucesso!'


        );
        return redirect()->route('categorias.index');
    }
    public function render()
    {
        return view('livewire.categoria.categoria-create');
    }
}
