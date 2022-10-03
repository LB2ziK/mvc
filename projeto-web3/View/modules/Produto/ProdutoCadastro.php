<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Produto</legend>
            <label for="nome">Codigo:</label>
            <input name="codigo" id="codigo" type="text" />

            <label for="produto">Produto:</label>
            <input name="produto" id="produto" type="text" />

            <label for="descricao">Descriçao:</label>
            <input name="descricao" id="descricao" type="text" />

            <label for="data">Data:</label>
            <input name="data" id="data" type="date" />

            <label for="valor">Valor:</label>
            <input name="valor" id="valor" type="text" />

           
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>