<?php
$nome = $_POST['nome'];
$snome = $_POST['snome'];
$sexo = $_POST['sx'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];
$flor = $_POST['flor'];
$dtnasc = $_POST['dtnasc'];
$email = $_POST['email'];

//linha que fará a conexão 
include "conecta.php";
//comando para inserir os dados na tabela
$sql = "INSERT INTO PESSOA ";
$sql = $sql."(NOME,SOBRENOME,SEXO,CURSO,CIDADE,FLOR,DTNASC,EMAIL)";
$sql = $sql."VALUES (";
$sql = $sql." '".$nome."',";
$sql = $sql." '".$snome."',";
$sql = $sql." '".$sexo."',";
$sql = $sql." '".$curso."',";
$sql = $sql." '".$cidade."',";
$sql = $sql." '".$flor."',";
$sql = $sql." '".$dtnasc."',";
$sql = $sql." '".$email."')";

$rs = mysqli_query($conexao,$sql);
if(!$rs){
    echo $sql;
    echo 'PROBLEMAS NA GRAVAÇÃO';
    echo '<meta http-equiva="refresh" content="10";URL=index.php/>';
    return;
}
mysqli_close($conexao);
echo"<br>GRAVAÇÃO EXECUTADA COM SUCESSO!";

?>