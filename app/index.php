<?php

use Classes\Herois;

require_once('../Global/global.php');

$dadosHeroi = new Herois(); 
$herois = $dadosHeroi->buscaHeroi(); //Busca os dados dos Herois Salvos no banco

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

    <title>API MARVEL</title>

</head>

<body>
    <section class="row" id="barra">
        <div class="col">
            <form method="$_POST" action="../Global/search.php" class="col-12">
                <input type="text" name="heroi" style="margin:10px;" class="col-form-label" placeholder="Nome do personagem" required>
                <input type="submit" value="adicionar" class="botao">
            </form>
        </div>
        <div class="col">
            <h1>Marvel Characters</h1>
        </div>
    </section>

    <main class="row">

        <?php foreach ($herois as $heroi) { ?>
            <section class="col-sm-12 col-md-4 col-lg-3">
                <h1><?= $heroi['nome'] ?></h1>
                <img src=<?= "{$heroi['imagem']}" ?> width="200px" height="300px" alt="<?= $heroi['nome'] ?>"></br></br>
                <p><?= (empty($heroi['descricao'])) ? 'Não a descrição para esse personagem.' : $heroi['descricao'];  ?></p>

                <form method="$_POST" action="../app/comic.php">
                    <input type="hidden" value='"<?= $heroi['id'] ?>"' name="id">
                    <button class="botao" type="submit">Comics</button>
                </form>
            </section>
        <?php } ?>

    </main>

</body>

</html>