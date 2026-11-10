<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    @livewireScripts
</head>

<body>
    <div class="nav-overflow" data-bs-toggle="nav-overflow">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                    Produtos
                </button>
                <div class="menu">
                    <a class="menu-item" href="/produtos">Listar Produtos</a>
                    <a class="menu-item" href="/produtos/create">Cadastrar Produtos</a>
                </div>
            </li>
            <li class="nav-item">
                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                    Categorias
                </button>
                <div class="menu">
                    <a class="menu-item" href="/categorias">Listar Categorias</a>
                    <a class="menu-item" href="/categorias/create">Cadastrar Categorias</a>
                </div>
            </li>
            <li class="nav-item">
                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                    Fornecedores
                </button>
                <div class="menu">
                    <a class="menu-item" href="/fornecedores">Listar Fornecedores</a>
                    <a class="menu-item" href="/fornecedores/create">Cadastrar Fornecedores</a>
                </div>
            </li>
            <li class="nav-item">
                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                    Movimentações
                </button>
                <div class="menu">
                    <a class="menu-item" href="/produtos">Criar Movimentação</a>
                    <a class="menu-item" href="/produtos/create">Historico de movimentações</a>
                </div>
            </li>
            <button type="button" class="btn btn-outline-danger" wire:click="logout">
                <i class="bi bi-box-arrow-right"></i>
                Sair
            </button>

        </ul>
    </div>
    {{ $slot }}

    <!-- JavaScript do Bootstrap -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
    @livewireScripts
</body>



</html>
