<?php


namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;


class RealizaLogin implements interfaceControlador 
{

private $repositorioDeUsuarios; 




public function __construct() 
{
    $entityManager = (new EntityManagerCreator())->getEntityManager();
    $this->repositorioDeUsuarios = $entityManager->getRepository(Usuario::class);
}




 public function processaRequisicao() : void {

    $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); 
    
    if (is_null($email) || $email ===false )    
        { 
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem']= 'Email inválido - teste';

            header ('Location: /login');
            return;
        }  


    $senha = filter_input( INPUT_POST, 'senha', FILTER_SANITIZE_STRING); 

    if (is_null($senha) || $senha ===false )    
        { 
            $_SESSION['tipo_mensagem'] = 'alert';
            $_SESSION['mensagem']      = 'Senha inválida';

            header ('Location: /login');
            return;
        }  
    

     $usuario = $this->repositorioDeUsuarios->findOneBy(['email' => $email]);

     if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha) )


     { 

        $_SESSION['tipo_mensagem'] = 'alert';
        $_SESSION['mensagem']      = 'Senha incorreta';

       header ('Location: /login');
        
        return;
     }  

      session_start();

      $_SESSION['logado'] = true;

      

      $_SESSION['tipo_mensagem'] = 'success';
      $_SESSION['mensagem']      = 'Logado com sucesso';



    header('Location: /listar-cursos');

    }
    
    

 


 }



