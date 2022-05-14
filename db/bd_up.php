<?php
$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR (200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL (2,1)
    )
";

if($bd->exec($sql)){
    echo "\ntabela criada\n";
} else {
    echo "\nerro ao criar tabela filmes\n";
};

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    1,
    'Ataque dos cães',
    'https://www.themoviedb.org/t/p/w300/pTieUAFyDbC22uq0p7uMT1wBYax.jpg',
    'Um fazendeiro durão trava uma guerra implacável contra a nova do esposa do irmão, até que o inesperado acontece.',
    9.0
)";

if($bd->exec($sql)) {
    echo "\nfilme inserido\n";
};

?>