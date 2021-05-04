<?php 
include('conexao.php');

$sql = "select * from tblteste";
$qry = mysqli_query($conn,$sql);

while ($linha=mysqli_fetch_array($qry)){

    $idteste = $linha['idteste'];
    $idade = $linha['idade']+1;
    

    $sql2 = "UPDATE tblteste set idade='$idade'
    where idteste='$idteste'";
    $qry2 = mysqli_query($conn,$sql2);

}
header("Location:index.php");