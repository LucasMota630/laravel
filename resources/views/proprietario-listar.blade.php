<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proprietários</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 25px;
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .add-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        
        .add-btn:hover {
            background-color: #218838;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        
        th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #495057;
        }
        
        tr:hover {
            background-color: #f8f9fa;
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
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-edit {
            background-color: #17a2b8;
            color: white;
        }
        
        .btn-edit:hover {
            background-color: #138496;
        }
        
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        
        .btn-delete:hover {
            background-color: #c82333;
        }
        
        .cpf {
            font-family: monospace;
        }
        
        .empty-message {
            text-align: center;
            padding: 20px;
            color: #6c757d;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Proprietários</h1>
        
        <div class="header-actions">
            <a href="{{ route('proprietario-formulario') }}" class="add-btn">+ Novo Proprietário</a>
        </div>
        
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
                @forelse ($proprietarios as $proprietario)
                    <tr>
                        <td>{{ $proprietario->id }}</td>
                        <td>{{ $proprietario->nome }}</td>
                        <td class="cpf">{{ $proprietario->cpf }}</td>
                        <td>{{ $proprietario->telefone }}</td>
                        <td>{{ $proprietario->email }}</td>
                        <td class="actions">
                            <a href="{{ route('proprietario-editar', $proprietario->id) }}" class="btn btn-edit">Editar</a>
                            <a href="/proprietario/remove/{{ $proprietario->id }}" class="btn btn-delete" 
                               onclick="return confirm('Tem certeza que deseja excluir este proprietário?')">Excluir</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="empty-message">Nenhum proprietário cadastrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script>
        // Formata CPF e telefone
        document.addEventListener('DOMContentLoaded', function() {
            const cpfs = document.querySelectorAll('.cpf');
            cpfs.forEach(cpf => {
                let value = cpf.textContent.replace(/\D/g, '');
                if (value.length === 11) {
                    cpf.textContent = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                }
            });

            const telefones = document.querySelectorAll('td:nth-child(4)');
            telefones.forEach(tel => {
                let value = tel.textContent.replace(/\D/g, '');
                if (value.length === 11) {
                    tel.textContent = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                } else if (value.length === 10) {
                    tel.textContent = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
                }
            });
        });
    </script>
</body>
</html>