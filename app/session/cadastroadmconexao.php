<?php
session_start();
include '../db/connection.php';
// include 'verificacao.php';


$senha = mysqli_real_escape_string($connection,$_POST['senha']);
$nome = mysqli_real_escape_string($connection,$_POST['nome']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$telefone = mysqli_real_escape_string($connection,$_POST['telefone']);


if(empty($nome) || empty($email)){
    echo "<script>alert('Insira os dados corretamente');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}


$query = "INSERT INTO admin (email, senha, nome, telefone, estado) VALUES ('$email', '$senha', '$nome', '$telefone')";
$result = mysqli_query($connection, $query);
$row=mysqli_num_rows($result);


if ($row==0){
    echo "<script>alert('ERRO AO CADASTRAR');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}

else if($row>0){
    echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
}
?>