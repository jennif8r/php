<?php
include "conecta.php";

$sql = "SELECT * FROM PESSOA ";
$rs = mysqli_query($conexao,$sql);
$total_regitros = mysqli_num_rows($rs);
?>

<html>
<head>
    <title>Consulta Pessoa</title>
</head>
<body>
    <h1>Relação de Pessoas</h1>
    <table cellspacing="0" border="1">
         <thead> <!-- cabeçalho da tabela -->
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Sexo</th>
                <th>Curso</th>
                <th>Cidade</th>
                <th>Flor</th>
                <th>Data de Nascimento</th>
                <th>E-mail</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <?php
        while ($reg = mysqli_fetch_array($rs)){
            $id = $reg["ID"];
            $nome = $reg["NOME"];
            $snome = $reg["SOBRENOME"];
            $sexo = $reg["SEXO"];
            $curso = $reg["CURSO"];
            $cidade = $reg["CIDADE"];
            $flor = $reg["FLOR"];
            $dtnasc = $reg["DTNASC"];
            $email = $reg["EMAIL"];
        ?>
        <tr>
            <td><?php print $nome; ?></td>
            <td><?php print $snome; ?></td>
            <td><?php print $sexo; ?></td>
            <td><?php print $curso; ?></td>
            <td><?php print $cidade; ?></td>
            <td><?php print $flor; ?></td>
            <td><?php print $dtnasc; ?></td>
            <td><?php print $email; ?></td>
            <td>alterar/exclui</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>