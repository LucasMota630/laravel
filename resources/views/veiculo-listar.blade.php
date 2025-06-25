<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veículos</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #333;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .actions {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .btn-edit {
            background-color: #4CAF50;
            color: white;
        }
        
        .btn-edit:hover {
            background-color: #45a049;
        }
        
        .btn-delete {
            background-color: #f44336;
            color: white;
        }
        
        .btn-delete:hover {
            background-color: #d32f2f;
        }
        
        .add-btn {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #2196F3;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
        }
        
        .add-btn:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Veículos</h1>
        
        <a href="{{ route('veiculo-formulario') }}" class="add-btn">Adicionar Novo Veículo</a>
        
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Placa</th>
                    <th>Cor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->id }}</td>
                        <td>{{ $veiculo->marca }}</td>
                        <td>{{ $veiculo->modelo }}</td>
                        <td>{{ $veiculo->ano }}</td>
                        <td>{{ $veiculo->placa }}</td>
                        <td>{{ $veiculo->cor }}</td>
                        <td class="actions">
                            <a href="{{ route('veiculo-editar', $veiculo->id) }}" class="btn btn-edit">Editar</a>
                            <a href="/veiculo/remove/{{ $veiculo->id }}" class="btn btn-delete" 
                               onclick="return confirm('Tem certeza que deseja excluir este veículo?')">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>