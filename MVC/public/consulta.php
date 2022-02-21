<?php

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

require __DIR__ . '/../vendor/autoload.php';


$fabrica = new EntityManagerCreator();
$entidadeFabrica = $fabrica->getEntityManager();
$cursos = $entidadeFabrica->getRepository(Curso::class);
$cursoList = $cursos->findAll();



foreach ($cursoList as $curso) {
	echo "\nID:{$curso->getId()} Nome: {$curso->getDescricao()} "; }


//vendor\bin\doctrine dbal:run-sql "SELECT * FROM usuarios;"


//dbal:run-sql 'INSERT INTO usuarios (email, senha) VALUES ("regis@alura.com.br", "senha")';