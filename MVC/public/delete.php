<?php

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

require __DIR__ . '/../vendor/autoload.php';


$fabrica = new EntityManagerCreator();
$entidadeFabrica = $fabrica->getEntityManager();
$cursos = $entidadeFabrica->getRepository(Curso::class);


$id = $argv[1];
$deletar = $entidadeFabrica->getReference(Curso::class,  $id);



$entidadeFabrica->remove($deletar);
$entidadeFabrica->flush();
