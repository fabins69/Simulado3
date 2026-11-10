<div class="m-0 d-grid place-items-center theme-secondary theme-contrast vh-100">
    <div class="card card-body w-75 ">
        <form wire:submit="store" class="grid grid-cols-1 gap-5" data-bs-validate novalidate>
            <div class="grid gap-5">
                <div class="form-field md:g-col-6">
                    <label for="validationTooltip01" class="form-label">Nome</label>
                    <input type="text" wire:model="nome_categoria" class="form-control" id="validationTooltip01"
                        value="" required aria-describedby="validationTooltip01Feedback">
                    <div id="validationTooltip01Feedback" class="tooltip invalid-tooltip">Nome é obrigatório</div>
                </div>
                
            </div>
            <div class="">
                    <button type="submit" class="btn-solid theme-primary">Cadastrar</button>
                </div>
        </form>
    </div>
</div>
