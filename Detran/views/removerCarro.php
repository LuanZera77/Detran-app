<?php include ('verificaSessao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/remover.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div id="principal">
        <div id="titulo">
            <h2>Remover</h2>
        </div>
            <?php
                $id = $_GET['id'];
            ?>
            <form method="POST" action="../controller/controlerCarro.php">
                <label>Tem certeza que deseja remover?</label>
                <br>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" class="botao" name="btn" value="Cancelar">
                <input type="submit" class="botao" name="btn" value="Remover">
                <br>
                
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>