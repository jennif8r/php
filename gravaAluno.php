<?php
$nome = $_POST['cNome'];
$celular = $_POST['cCelular'];
$cpf = $_POST['cCPF'];
$descricao = $_POST['cDescricao'];
//linha que fará a conexão 
include "conecta.php";
//comando para inserir os dados na tabela
$sql = "INSERT INTO ALUNOS ";
$sql = $sql."(NOME,CELULAR,CPF,DESCRICAO)";
$sql = $sql."VALUES (";
$sql = $sql." '".$nome."',";
$sql = $sql." '".$celular."',";
$sql = $sql." '".$cpf."',";
$sql = $sql." '".$descricao."')";

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