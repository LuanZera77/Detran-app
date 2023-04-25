<?php  
    include ('verificaSessao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head lang="pt-br">
    <link rel="stylesheet" href="../css/cadastrar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Infração</title>
</head>
<body>
    <div id="principal">
        <div id="titulo">
            <h2>Cadastrar</h2>
        </div>
        <form method="POST" action="../controller/controlerinfracao.php">
            
            <label>Descrição:</label><br>
            <input type="text" name="descricao" placeholder="Digite aqui a descrição">
            <br>
            <label>N° Ponto:</label><br>
            <input type="number" name="ponto" placeholder="Digite aqui o N° de pontos">
            <br>
            <label>Valor:</label><br>
            <input type="Number" name="valor" placeholder="Digite aqui o valor da infração">
            <br>

            <input type="submit" class="botao" name="btn" value="Enviar">
        </form>
    </div>
</body>
</html>