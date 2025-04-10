<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Detalhes do Produto</h4>
        </div>
        <div class="card-body">
            <h5>Nome: {{ $produto->nome }}</h5>
            <p><strong>Ingredientes:</strong> {{ $produto->ingredientes }}</p>
            <p><strong>Valor:</strong> R$ {{ number_format($produto->valor, 2, ',', '.') }}</p>
            @if($produto->imagem)
                <div>
                    <img src="{{ asset('storage/' . $produto->imagem) }}" class="img-fluid rounded" width="200">
                </div>
            @endif
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </div>
</div>

