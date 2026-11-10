<div class="m-0 d-grid place-items-center theme-secondary theme-contrast vh-100">
    <div class="card card-body w-50">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fornecedors as $f)
                <tr>
                    <td>{{ $f->id }}</td>
                    <td>{{ $f->nome }}</td>
                    <td>{{ $f->telefone }}</td>
                    <td>{{ $f->email }}</td>
                </tr>
            @endforeach
        </tbody>
        <a class="btn-solid theme-primary" href="/fornecedores/create" role="button">Cadastrar Fornecedor</a>
    </table>
    </div>
</div>