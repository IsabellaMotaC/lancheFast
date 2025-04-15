<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detalhes do Funcionário</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Nome</th><td>{{ $funcionario->nome }}</td></tr>
                <tr><th>CPF</th><td>{{ $funcionario->cpf }}</td></tr>
                <tr><th>Email</th><td>{{ $funcionario->email }}</td></tr>
            </table>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
