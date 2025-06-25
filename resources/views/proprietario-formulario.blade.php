<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Proprietário</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }

        .btn-submit {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #2980b9;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #7f8c8d;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Cadastro de Proprietário</h1>
        
        <form action="{{ route('proprietario-store') }}" method="POST">
            @csrf

            <!-- Campo oculto para o ID -->
            <input type="hidden" name="id" value="{{ $proprietario->id ?? old('id') }}">
            
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" 
                       value="{{ $proprietario->nome ?? old('nome') }}" 
                       required placeholder="Digite o nome completo">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" 
                       value="{{ $proprietario->cpf ?? old('cpf') }}" 
                       required placeholder="000.000.000-00"
                       pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" 
                       value="{{ $proprietario->telefone ?? old('telefone') }}" 
                       required placeholder="(00) 00000-0000"
                       pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" 
                       value="{{ $proprietario->email ?? old('email') }}" 
                       required placeholder="seu@email.com">
            </div>

            <button type="submit" class="btn-submit">
                {{ isset($proprietario->id) ? 'Atualizar' : 'Cadastrar' }}
            </button>
        </form>

        <a href="{{ route('proprietario-listar') }}" class="back-link">Voltar para a lista</a>
    </div>

    <script>
        // Máscara para CPF
        document.getElementById('cpf').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 3) value = value.replace(/^(\d{3})/, '$1.');
            if (value.length > 7) value = value.replace(/^(\d{3}\.\d{3})/, '$1.');
            if (value.length > 11) value = value.replace(/^(\d{3}\.\d{3}\.\d{3})/, '$1-');
            e.target.value = value.substring(0, 14);
        });

        // Máscara para telefone
        document.getElementById('telefone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 0) value = value.replace(/^(\d{0,2})/, '($1');
            if (value.length > 3) value = value.replace(/^(\(\d{2})/, '$1) ');
            if (value.length > 10) value = value.replace(/^(\(\d{2}\) \d{5})/, '$1-');
            e.target.value = value.substring(0, 15);
        });
    </script>
</body>
</html>