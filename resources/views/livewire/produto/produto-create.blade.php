<div class="m-0 d-grid place-items-center theme-inverse theme-contrast vh-100">
    <h1 class="text-color-light">Cadastro Produtos</h1>
    <div class="card card-body w-75">
        <form wire:submit="store" class="grid grid-cols-1 gap-5" data-bs-validate novalidate>
            <div class="grid gap-5">
                <div class="form-field md:g-col-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" id="nome" value="" required
                        aria-describedby="validationTooltip01Feedback">
                    <div id="validationTooltip01Feedback" class="tooltip invalid-tooltip">Nome é obrigatório</div>
                </div>
                <div class="form-field md:g-col-3">
                    <label for="validationTooltipDonation" class="form-label">Preço Custo</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupTooltipPrepend">R$</span>
                        <input type="number" wire:model="preco_custo" class="form-control" value="100"
                            id="validationTooltipDonation"
                            aria-describedby="inputGroupTooltipPrepend validationTooltipDonationFeedback" required>
                    </div>
                    <div id="validationTooltipDonationFeedback" class="tooltip invalid-tooltip">Preço Obrigatório</div>
                </div>
                <div class="form-field md:g-col-3">
                    <label for="validationTooltipDonation" class="form-label">Preço Venda</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupTooltipPrepend">R$</span>
                        <input type="number" wire:model="preco_venda" class="form-control" value="100"
                            id="validationTooltipDonation"
                            aria-describedby="inputGroupTooltipPrepend validationTooltipDonationFeedback" required>
                    </div>
                    <div id="validationTooltipDonationFeedback" class="tooltip invalid-tooltip">Preço Obrigatório</div>
                </div>
            </div>

            <div class="form-field">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea wire:model="descricao" class="form-control" id="descricao"></textarea>
            </div>

            <div class="grid gap-5">
                <div class="form-field md:g-col-6">
                    <label for="validationTooltip03" class="form-label">Marca</label>
                    <input type="text" wire:model="marca" class="form-control" id="validationTooltip03" required
                        aria-describedby="validationTooltip03Feedback">
                    <div id="validationTooltip03Feedback" class="tooltip invalid-tooltip">Please provide a city</div>
                </div>
                <div class="form-field md:g-col-2">
                    <label for="validationTooltip04" class="form-label">Unidade de medida</label>
                    <select class="form-control" wire:model="unidade_medida" id="validationTooltip04" required
                        aria-describedby="validationTooltip04Feedback">
                        <option value="">Escolha...</option>
                        <option>m</option>
                        <option>m2</option>
                        <option>kg</option>
                        <option>Sc</option>
                    </select>
                    <div id="validationTooltip04Feedback" class="tooltip invalid-tooltip">Unidade de medida obrigatória
                    </div>
                </div>
                <div class="form-field md:g-col-2">
                    <label for="validationTooltip04" class="form-label">Categoria</label>
                    <select class="form-control" wire:model="categoria_id" id="validationTooltip04" required
                        aria-describedby="validationTooltip04Feedback">
                        <option value="">Selecione uma categoria...</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">
                                {{ $categoria->nome_categoria }}
                            </option>
                        @endforeach
                    </select>
                    <div id="validationTooltip04Feedback" class="tooltip invalid-tooltip">Unidade de medida obrigatória
                    </div>
                </div>
                <div class="form-field md:g-col-2">
                    <label for="validationTooltipDonation" class="form-label">Quantidade</label>
                    <div class="input-group">
                        <input type="number" wire:model="qtd_estoque" class="form-control" value=""
                            id="validationTooltipDonation"
                            aria-describedby="inputGroupTooltipPrepend validationTooltipDonationFeedback" required>
                    </div>
                    <div id="validationTooltipDonationFeedback" class="tooltip invalid-tooltip">Quantidade Obrigatório
                    </div>
                </div>
                <div class="form-field md:g-col-2">
                    <label for="validationTooltipDonation" class="form-label">Estoque Minimo</label>
                    <div class="input-group">
                        <input type="number" wire:model="estoque_min" class="form-control" value=""
                            id="validationTooltipDonation"
                            aria-describedby="inputGroupTooltipPrepend validationTooltipDonationFeedback" required>
                    </div>
                    <div id="validationTooltipDonationFeedback" class="tooltip invalid-tooltip">Estoque Obrigatório
                    </div>
                </div>
                <div class="form-field md:g-col-2">
                    <label for="validationTooltip04" class="form-label">Fornecedor</label>
                    <select class="form-control" wire:model="fornecedor_id" id="validationTooltip04" required
                        aria-describedby="validationTooltip04Feedback">
                        <option value="">Selecione um fornecedor...</option>
                        @foreach ($fornecedors as $f)
                            <option value="{{ $f->id }}">
                                {{ $f->nome }}
                            </option>
                        @endforeach
                    </select>
                    <div id="validationTooltip04Feedback" class="tooltip invalid-tooltip">Unidade de medida
                        obrigatória
                    </div>
                </div>





                <button class="btn-solid theme-primary justify-self-start" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
