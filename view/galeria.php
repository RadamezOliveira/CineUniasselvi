<?php
include "cabecalho.php";
require "./repository/FilmesRepositoryPDO.php";
require "./util/mensagem.php";

session_start();

$filmesRepository = new FilmesRepositorioPDO();
$filmes = $filmesRepository->listarTodos();
?>

<body>
    <nav class="nav-extended">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/" class="active">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Cine Uniasselvi</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent teal accent-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Asistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php foreach ($filmes as $filme) : ?>
                <div class="col s12 m6 l3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="<?= $filme->poster ?>">
                            <a class="btn-floating halfway-fab waves-effect teal accent-4"><i class="material-icons">favorite</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title"><?= $filme->titulo ?></span>
                            <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $filme->nota ?></p>
                            <p><?= $filme->sinopse ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endforeach
            ?>
        </div>
    </div>
    <?=Mensagem::mostrar();?>

</body>

</html>