<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
				@foreach ($proprietarios as $proprietario)
            <tr>
				<td>{{ $proprietario->id }}</td>
                <td>{{ $proprietario->nome }}</td>
                <td>{{ $proprietario->cpf }}</td>
                <td>{{ $proprietario->telefone }}</td>                
	            <td>{{ $proprietario->email }}</td>                              
                <td>
                    <a href="/proprietario/remove/{{ $proprietario->id }}">Excluir</a>
                    <a href="{{ route('proprietario-editar', $proprietario->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>