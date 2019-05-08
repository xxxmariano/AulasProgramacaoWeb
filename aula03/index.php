<?php
$preco = 10;
if($preco >=20) {
    echo "Não posso compror!";
}else{
    echo 'posso comprar';
}
echo " <br>";
$nota = 1.5;
if($nota >= 7 and $nota <= 10 ){
echo 'Aprovado';}
else if ($nota >=4){
    echo'Recuperação';
}else{
    echo'Reprovados';
}
echo "<br>";
$contador =0;

while ($contador <= 10) {
    echo $contador++;
    echo "<br>";

}
for($i = 10; $i <= 50; $i++){
echo "<br>";
echo $i;
}







?>