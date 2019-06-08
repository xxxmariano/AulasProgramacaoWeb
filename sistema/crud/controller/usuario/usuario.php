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
        require_once 'usuarioDAO.php';
    ?>

    <div class="container">
    <div class="row justify-content-center bg-light">
            <form action="usuarioDAO.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id?>">
                <div class="form-group">
                    <label>Usúaio<label>
                    <input type="text" class="form-control" value="<?php echo $usuario ?>" name="usuario" id="usuario">
                </div>

                <div class="form-group">
                    <label>Senha<label>
                    <input type="password" class="form-control" value="<?php echo $usuario ?>" name="senha" id="senha"> 
                </div>


                <div class="form-group">
                <?php if($id !=0) :?>
                <button type="submit" class="btn btn-info" name="atualizar">atualizar</button>
                <?php else :?>
                <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
                <?php endif;?>
                </div>

            </form>
        </div>

        <?php
           require_once ('../banco/conexao.php');

           $resultado = $conexao->query("SELECT * FROM usuario") or die
           (mysqli_error($conexao));
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
                while($row = $resultado->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['usuario']; ?> </td>
                        <td><?php echo $row['senha']; ?></td>
                        <td>
                            <a href="usuario.php?editar=<?php echo $row ['id']; ?>" class="btn btn-info">Editar</a>
                            <a href="usuarioDAO.PHP?excluir=<?php echo $row['id']; ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                
            

                
            </table>


        </div>



    </div>
</body>

</html>