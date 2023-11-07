<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Formulario</title>
    <style>
        .container{
            width: 400px;
            padding: 20px;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px auto;
        }
        form {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        form input {
            width: 300px;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>RESTAURANTE DO XIRU</h1>
        <form action="exercicio7.php" method="post">
            <input type="text" name="nomePrato" id="nomePrato" placeholder="Insira o nome do prato">
            <input type="number" name="peso" id="peso" min="10" max="2000" step="0.01" placeholder="Peso">
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar">
        </form>
    </div>
</body>
</html>