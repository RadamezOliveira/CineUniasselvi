<?php

session_start();
//require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";

class FilmesController{
    public function save($request)
    {
        $filmesRepository = new FilmesRepositorioPDO();
        $filme = new Filme();

        $filme->titulo     = $request["titulo"];
        $filme->sinopse    = $request["sinopse"];
        $filme->nota       = $request["nota"];
        $filme->poster     = $request["poster"];


        if($filmesRepository->salvar($filme)) {
            $_SESSION["msg"] = "Filme cadastrado com sucesso";
        };
        header("Location: /");
    }
}
