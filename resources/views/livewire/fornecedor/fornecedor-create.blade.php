<div class="m-0 d-grid place-items-center theme-secondary theme-contrast vh-100">
    <div class="card card-body w-50">
        <form wire:submit='store' class="row g-3">
            <div class="md:col-6">
                <div class="col-4">
                <label for="email"  class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control" id="email">
            </div>
                <div class="md:col-2">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" placeholder="Nome" aria-label="">
                </div>
                <div class="col-4">
                    <label for="endereco" class="form-label">Endereco</label>
                    <input type="text" wire:model="endereco" class="form-control" id="endereco" placeholder="">
                </div>
                <div class="col-4">
                    <label for="cnpj_cpf" class="form-label">CNPJ/CPF</label>
                    <input type="text" wire:model="cnpj_cpf" class="form-control" id="cnpj_cpf"
                        placeholder="">
                </div>
                <div class="md:col-6">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" wire:model="telefone" class="form-control" id="telefone">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn-solid theme-primary">Cadastrar</button>
                </div>
        </form>
    </div>
</div>
