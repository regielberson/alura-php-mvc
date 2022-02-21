<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;


class FormularioInsercao  extends ControllerComHtml implements interfaceControlador {


private $repositorioDeCursos;


 public function processaRequisicao() : void {


  echo  $this->renderizaHtml('cursos/formulario.php', [


      'titulo' => 'Novo Curso',
  ] ) ;
  

 }


}