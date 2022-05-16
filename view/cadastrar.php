<?php
include "cabecalho.php";
?>

<body>
    <nav class="nav-extended">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li><a href="/novo" class="active">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Cine Uniasselvi</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent teal accent-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Asistidos</a></li>
                <li class="tab disabled"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <form method="POST" enctype="multipart/form-data">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>
                        <div class="row">
                            <!--input titulo-->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="titulo_filme" type="text" class="validate" name="titulo" required>
                                    <label for="titulo_filme">Título do filme</label>
                                </div>
                            </div>
                            <!--input sinopse-->
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="Sinopse" class="materialize-textarea" name="sinopse" ></textarea>
                                    <label for="Sinopse">Sinopse</label>
                                </div>
                            </div>
                            <!--input nota-->
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="nota" type="number" step=".1" min="0" max="10" class="validate" name="nota" required>
                                    <label for="nota">Nota do filme</label>
                                </div>
                            </div>
                            <!--input capa-->
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn waves-effect waves-light teal accent-3 black-text">
                                        <span>Capa</span>
                                        <input type="file" name="poster_file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="poster">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light grey btn" href="/">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light teal accent-4 btn">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>