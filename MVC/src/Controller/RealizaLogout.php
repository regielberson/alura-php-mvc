<?php


namespace Alura\Cursos\Controller;

class RealizaLogout implements interfaceControlador 

{


  public function processaRequisicao() : void  {

    session_destroy();
    header ('location: /login ');
  }




}