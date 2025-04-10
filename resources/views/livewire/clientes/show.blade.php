<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detalhes do Cliente</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Nome</th><td>{{ $cliente->nome }}</td></tr>
                <tr><th>Endereço</th><td>{{ $cliente->endereco }}</td></tr>
                <tr><th>Telefone</th><td>{{ $cliente->telefone }}</td></tr>
                <tr><th>CPF</th><td>{{ $cliente->cpf }}</td></tr>
                <tr><th>Email</th><td>{{ $cliente->email }}</td></tr>
            </table>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
