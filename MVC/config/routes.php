<?php


use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\FormularioEdicao;
use Alura\Cursos\Controller\FormularioLogin;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\Exclusao;
use Alura\Cursos\Controller\RealizaLogin;
use Alura\Cursos\Controller\RealizaLogout;


$rotas = [

 '/listar-cursos' => ListarCursos::class,
 '/novo-curso' => FormularioInsercao::class,
 '/salvar-curso' => Persistencia::class,
 '/excluir-curso' => Exclusao::class,
 '/alterar-curso' => FormularioEdicao::class,
 '/login' => FormularioLogin::class,
 '/realiza-login' => RealizaLogin::class,
 '/logout' => RealizaLogout::class,

 //apenas um comentário para o git

];

return $rotas;