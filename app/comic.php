<?php

use Classes\Historia;


require_once '../Global/global.php';

if (isset($_REQUEST['id'])) {
    $historia = new Historia();
    $comics = $historia->buscaHistoria($_REQUEST['id']); //Busca as comics de acordo com o id do heroi selecionado
} else {
    header("Location: ../app/index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo/estilo.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <title>Comics</title>
</head>

<body>
    <div class="row" id="barra">
        <div class="col">
            <button class="botao"><a href="../app/index.php" style="text-decoration: none;color:white;">Voltar</a></button>
        </div>
       <div class="col">
          <h1 style='margin-top:10px' >Comics</h1>
       </div>
    </div>
    <main class="row">
        <?php foreach ($comics as $comic) { ?>
            <section class="col-sm-12 col-md-4 col-lg-3">
                <h1><?= $comic['titulo'] ?></h1>
                <img src=<?= "{$comic['imagem']}" ?> width="200px" height="300px" alt="<?= $comic['titulo'] ?>"></br></br>
                <p><?= (empty($comic['descricao'])) ? 'Não a descrição para essa comic.' : $comic['descricao'];  ?></p>
            </section>
        <?php } ?>

    </main>
</body>

</html>