<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Veículo</h1>
    
    <form action="{{ route('veiculo-store') }}" method="POST">
        @csrf

        {{-- Campo oculto para o ID --}}
        <input type="hidden" name="id" value="{{ $veiculo->id ?? old('id') }}">
        
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" value="{{ $veiculo->marca ?? old('marca') }}" required>
        </div>

        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" value="{{ $veiculo->modelo ?? old('modelo') }}" required>
        </div>

        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="text" name="ano" id="ano" value="{{ $veiculo->ano ?? old('ano') }}" required>
        </div>

        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" name="placa" id="placa" value="{{ $veiculo->placa ?? old('placa') }}" required>
        </div>

        <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" name="cor" id="cor" value="{{ $veiculo->cor ?? old('cor') }}" required>
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>