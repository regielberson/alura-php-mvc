<?php include __DIR__ . '/../inicio-html.php' ?>


 
      <a href="/novo-curso" class="btn btn-primary mb-2"> Novo curso  </a>
 

        <ul class="list-group">

            <?php foreach ($cursos as $curso): ?>
                <li class="list-group-item">
                    ID:    <?= $curso->getID(); ?>       <br>
                    Curso: <?= $curso->getDescricao();?> <br>
                    
                          <a  href="/excluir-curso?id=<?= $curso->getId();?>" 
                         class="btn btn-danger btn-sm float-right ;">  Excluir </a>     
                         
                         <a  href="/alterar-curso?id=<?= $curso->getId();?>" 
                         class="btn btn-info btn-sm float-right ;">  Alterar </a>   
                </li>                
            <?php endforeach; ?>
        </ul>

           
        //comente

<?php include __DIR__ . '/../fim-html.php' ?>
