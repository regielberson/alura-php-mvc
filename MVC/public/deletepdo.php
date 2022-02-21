<?php

use Alura\Cursos\Entity\Curso;

$caminho = __DIR__ . '/../db.sqlite';

echo $caminho;


$pdo = new PDO ('sqlite:'. $caminho);

$consulta = $pdo->query('Select * from cursos;');

$Listacursos = $consulta->fetch(PDO::FETCH_ASSOC);


var_dump($Listacursos)
; exit();

 foreach ($Listacursos as $cursos) {

     $cursos['Id'];

 }