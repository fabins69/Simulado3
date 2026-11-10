<div class="m-0 d-grid place-items-center theme-secondary theme-contrast vh-100">
    <div class="card card-body w-50">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Categoria</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco_venda }}</td>
                    <td>{{ $produto->qtd_estoque }}</td>
                    <td>{{ $produto->categoria->nome_categoria }}</td>
                </tr>
            @endforeach
        </tbody>
        <a class="btn-solid theme-primary" href="/produtos/create" role="button">Cadastrar Produto</a>
    </table>
    </div>
</div>