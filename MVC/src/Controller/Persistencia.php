<?php


namespace Alura\Cursos\Controller;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;


class Persistencia implements InterfaceControlador
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    
    private $entityManager;


    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }



    public function processaRequisicao(): void
    {
     
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);    
        $id = filter_input(  INPUT_GET,  'id',     FILTER_VALIDATE_INT);


       
        $curso = new Curso;
        $curso->setDescricao($descricao);



      if (!is_null($id) && $id !==false) {
           // atualizar 

            $curso = $this->entityManager->find(Curso::class, $id);
            $curso->setDescricao($descricao);
            $_SESSION['mensagem']      = 'Atualizado com Sucesso';
      } else {        
       
         
        $this->entityManager->persist($curso);  
        $_SESSION['mensagem']      = 'Salvo com Sucesso';

      }

      $this->entityManager->flush();

      $_SESSION['tipo_mensagem'] = 'success';
     
      
      header('Location: /listar-cursos');

    }




    
}