<?php
include "conecta.php";

$sql = "SELECT * FROM ALUNOS ";
$rs = mysqli_query($conexao,$sql);
$total_regitros = mysqli_num_rows($rs);
?>

<html>
<head>
    <title>Consulta Alunos</title>
</head>
<body>
    <h1>Relação de Alunos</h1>
    <table cellspacing="0" border="1">
         <thead> <!-- cabeçalho da tabela -->
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Celular</th>
                <th>Descrição</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <?php
        while ($reg = mysqli_fetch_array($rs)){
            $id = $reg["CODALUNO"];
            $nome = $reg["NOME"];
            $cpf = $reg["CPF"];
            $celular = $reg["CELULAR"];
            $descricao = $reg["DESCRICAO"];
        
        ?>
        <tr>
            <td><?php print $nome; ?></td>
            <td><?php print $cpf; ?></td>
            <td><?php print $celular; ?></td>
            <td><?php print $descricao; ?></td>
            <td>alterar/exclui</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>