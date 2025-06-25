<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Anúncios</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --success-color: #27ae60;
            --danger-color: #e74c3c;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --border-color: #dee2e6;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            padding: 20px;
            background-color: var(--primary-color);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header h1 {
            font-size: 24px;
            font-weight: 600;
        }
        
        .add-btn {
            background-color: var(--success-color);
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .add-btn:hover {
            background-color: #219653;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }
        
        th {
            background-color: var(--light-color);
            font-weight: 600;
            color: var(--dark-color);
        }
        
        tr:hover {
            background-color: rgba(52, 152, 219, 0.05);
        }
        
        .description {
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .price {
            font-weight: bold;
            color: var(--success-color);
            white-space: nowrap;
            font-family: 'Courier New', monospace;
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
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-edit:hover {
            background-color: var(--secondary-color);
        }
        
        .btn-delete {
            background-color: var(--danger-color);
            color: white;
        }
        
        .btn-delete:hover {
            background-color: #c0392b;
        }
        
        .empty-message {
            text-align: center;
            padding: 40px;
            color: #6c757d;
            font-style: italic;
        }
        
        .date {
            white-space: nowrap;
        }
        
        @media (max-width: 768px) {
            .container {
                border-radius: 0;
            }
            
            th, td {
                padding: 10px 8px;
                font-size: 14px;
            }
            
            .actions {
                flex-direction: column;
                gap: 5px;
            }
            
            .btn {
                padding: 5px 8px;
                font-size: 13px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Lista de Anúncios</h1>
            <a href="{{ route('anuncio-formulario') }}" class="add-btn">+ Novo Anúncio</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Data de Publicação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($anuncios as $anuncio)
                    <tr>
                        <td>{{ $anuncio->id }}</td>
                        <td>{{ $anuncio->titulo }}</td>
                        <td class="description" title="{{ $anuncio->descricao }}">{{ $anuncio->descricao }}</td>
                        <td class="price">R$ {{ number_format(floatval($anuncio->preco), 2, ',', '.') }}</td>
                        <td class="date">{{ date('d/m/Y', strtotime($anuncio->data_publicacao)) }}</td>
                        <td class="actions">
                            <a href="{{ route('anuncio-editar', $anuncio->id) }}" class="btn btn-edit">Editar</a>
                            <a href="/anuncio/remove/{{ $anuncio->id }}" class="btn btn-delete" 
                               onclick="return confirm('Tem certeza que deseja excluir este anúncio?')">Excluir</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="empty-message">Nenhum anúncio cadastrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script>
        // Formatação adicional para garantir que valores monetários sejam exibidos corretamente
        document.addEventListener('DOMContentLoaded', function() {
            const priceCells = document.querySelectorAll('.price');
            
            priceCells.forEach(cell => {
                // Garante que o valor seja tratado como float
                let priceText = cell.textContent.replace('R$ ', '').trim();
                let priceValue = parseFloat(priceText.replace('.', '').replace(',', '.'));
                
                if (!isNaN(priceValue)) {
                    // Formata com 2 casas decimais, separador de milhar e decimal correto
                    cell.textContent = 'R$ ' + priceValue.toLocaleString('pt-BR', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                }
            });

            // Tooltip para descrições longas
            const descriptions = document.querySelectorAll('.description');
            descriptions.forEach(desc => {
                if (desc.scrollWidth > desc.clientWidth) {
                    desc.setAttribute('title', desc.textContent);
                }
            });
        });
    </script>
</body>
</html>