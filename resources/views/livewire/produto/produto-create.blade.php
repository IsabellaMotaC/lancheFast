<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastrar Produto</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.defer="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ingredientes</label>
                    <textarea class="form-control" wire:model.defer="ingredientes"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Valor</label>
                    <input type="number" step="0.01" class="form-control" wire:model.defer="valor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagem (opcional)</label>
                    <input type="file" class="form-control" wire:model="imagem">
                </div>
                <button class="btn btn-success">Salvar</button>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>

