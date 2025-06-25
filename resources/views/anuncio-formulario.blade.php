<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Anúncio</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --success-color: #2ecc71;
            --danger-color: #e74c3c;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --border-color: #ced4da;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 30px;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .form-header h1 {
            color: var(--dark-gray);
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark-gray);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            width: 100%;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
        }
        
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .back-link:hover {
            color: var(--primary-color);
        }
        
        .input-group {
            position: relative;
        }
        
        .input-group .currency {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: bold;
            color: #6c757d;
        }
        
        .input-group input {
            padding-left: 30px;
        }
        
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1>{{ isset($anuncio->id) ? 'Editar Anúncio' : 'Cadastrar Anúncio' }}</h1>
        </div>
        
        <form action="{{ route('anuncio-store') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $anuncio->id ?? old('id') }}">
            
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" 
                       value="{{ $anuncio->titulo ?? old('titulo') }}" 
                       required placeholder="Digite o título do anúncio">
            </div>
            
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" 
                          required placeholder="Descreva detalhes do anúncio">{{ $anuncio->descricao ?? old('descricao') }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="preco">Preço</label>
                <div class="input-group">
                    <span class="currency">R$</span>
                    <input type="text" name="preco" id="preco" class="form-control" 
                           value="{{ $anuncio->preco ?? old('preco') }}" 
                           required placeholder="0,00"
                           pattern="[0-9]+,[0-9]{2}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="data_publicacao">Data de Publicação</label>
                <input type="date" name="data_publicacao" id="data_publicacao" class="form-control" 
                       value="{{ $anuncio->data_publicacao ?? old('data_publicacao', date('Y-m-d')) }}"
                       required>
            </div>
            
            <button type="submit" class="btn btn-primary">
                {{ isset($anuncio->id) ? 'Atualizar Anúncio' : 'Cadastrar Anúncio' }}
            </button>
        </form>
        
        <a href="{{ route('anuncio-listar') }}" class="back-link">Voltar para a lista de anúncios</a>
    </div>

    <script>
        // Máscara para o campo de preço
        document.getElementById('preco').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            value = value.replace(/^0+/, '');
            
            if (value.length === 0) {
                e.target.value = '';
                return;
            }
            
            if (value.length === 1) {
                e.target.value = '0,0' + value;
            } else if (value.length === 2) {
                e.target.value = '0,' + value;
            } else {
                const reais = value.slice(0, -2);
                const centavos = value.slice(-2);
                e.target.value = reais.replace(/\B(?=(\d{3})+(?!\d))/g, '.') + ',' + centavos;
            }
        });

        // Validação do formulário
        document.querySelector('form').addEventListener('submit', function(e) {
            const preco = document.getElementById('preco').value;
            if (!/^\d{1,3}(?:\.\d{3})*,\d{2}$/.test(preco)) {
                alert('Por favor, insira um preço válido no formato 0,00');
                e.preventDefault();
            }
        });
    </script>
</body>
</html>