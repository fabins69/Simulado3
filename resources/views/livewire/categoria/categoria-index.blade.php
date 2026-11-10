<div class="m-0 d-grid place-items-center theme-secondary theme-contrast vh-100">
    <div class="card card-body w-50">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                
            </tr>
        </thead>

        <tbody>
            @foreach ($categorias as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nome_categoria }}</td>

                </tr>
            @endforeach
        </tbody>
        <a class="btn-solid theme-primary" href="/fornecedores/create" role="button">Cadastrar Fornecedor</a>
    </table>
    </div>
</div>