<!DOCTYPE html>
<html>

<head>
   <?php
   require_once '../../view/head.php';
   ?>
</head>

<body>
   <?php
   require_once '../../view/nav.php';
   ?>

   <div class="container">
       <div class="row justify-content-center bg-light">
           <form action="usuarioDAO.php" method="POST">
               <div class="form-group">
                   <label>Usuário</label>
                   <input type="text" class="form-control" name="usuario" id="usuario">
               </div>
               <div class="form-group">
                   <label>Senha</label>
                   <input type="password" class="form-control" name="senha" id="senha">
               </div>

               <div class="form-group">
                   <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
               </div>
           </form>
       </div>

       <?php
       require_once('../banco/conexao.php');

       $resultado = $conexao->query("SELECT * FROM usuario") or die(mysqli_error($conexao));
       ?>

       <div class="row justify-content-center">
           <table class="table">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Usuário</th>
                       <th>Senha</th>
                       <th colspan="2">Ações</th>
                   </tr>
               </thead>
               <?php
               while ($row = $resultado->fetch_assoc()) : ?>
                   <tr>
                       <td><?php echo $row['id']; ?></td>
                       <td><?php echo $row['usuario']; ?></td>
                       <td><?php echo $row['senha']; ?></td>
                       <td>
                           <a href="#" class="btn btn-info">Editar</a>
                           <a href="usuarioDAO.php?excluir=<?php echo $row['id']; ?> " class="btn btn-danger">Excluir</a>
                       </td>
                   </tr>
               <?php endwhile; ?>

           </table>
       </div>




   </div>

</body>


</html>





