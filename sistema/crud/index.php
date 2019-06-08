<!DOCTYPE html>
<html>

<head>
<?php
    require_once 'view/head.php';
 ?>
</head>

<body>
<div class="container">

        <div class="row justify-content-center bg-light">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Usúaio<label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                </div>

                <div class="form-group">
                    <label>Senha<label>
                    <input type="password" class="form-control" name="senha" id="senha">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="autenticar">Entrar</button>
                    <a href="/sistema/index.html" class="btn btn-info">Voltar</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>