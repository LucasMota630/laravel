<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Data de Publicação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
				@foreach ($anuncios as $anuncio)
            <tr>
				<td>{{ $anuncio->id }}</td>
                <td>{{ $anuncio->titulo }}</td>
                <td>{{ $anuncio->descricao }}</td>
                <td>{{ $anuncio->preco }}</td>                
	            <td>{{ $anuncio->data_publicacao }}</td>              
                <td>
                    <a href="/anuncio/remove/{{ $anuncio->id }}">Excluir</a>
                    <a href="{{ route('anuncio-editar', $anuncio->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>