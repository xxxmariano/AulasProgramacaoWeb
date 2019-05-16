<?php 
if(empty( $_POST['nome']) or empty ($_POST['nome']) or empty $_POST['senha']  or empty $_POST['observacao'])){
    echo"<script> alert('existem campos que sao obrigatorios que naop doram preenchidos');";
    echo"javascript:window.location='index.php';</script>";

}
$nome = $_POST['nome'];
$email =$_POST['email'];
$senha = $_POST['senha'];
$observacao = $_POST['observacao'];

if( strlen ($nome)>= 10 ){
    echo $nome."<br>";
}else{
    echo"<script> alert('Nome muito curto');";
    echo"javascript:window.location='index.php';</script>";

}

echo $email."<br>";
echo $senha."<br>";
echo $observacao."<br>";



?>