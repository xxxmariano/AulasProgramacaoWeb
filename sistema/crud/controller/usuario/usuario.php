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
</div>
</body>

</html>