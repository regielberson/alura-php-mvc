<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\InterfaceControlador;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\FormularioEdicao;


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
};



session_start();


  $EhRotaDeLogin = stripos ($caminho, 'login');

 if(!isset($_SESSION['logado']) &&  $EhRotaDeLogin ===false ) {
    header('Location: /login'); 
    exit();
 }



 $classeControladora = $rotas[$caminho]; //  Essa variável recebe uma posição no Array de rotas.
 $controlador = New $classeControladora(); // o PHP entende que é uma classe e estancía. 
 $controlador->processaRequisicao();








