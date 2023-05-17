<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="estiloPreferido.css">
</head>
<body>
   <h1>Primeiro formulário</h1>
    <form action="gravaPessoa.php" method="post">
        <h2>Insira seu nome</h2>
        <label for="pnome">Primeiro Nome:</label>
        <input type="text" id="pnome" name="nome" size="30" value=""><br><br>
        <label for="snome">Sobrenome:</label>
        <input type="text" id="snome"name=snome value="">
 
     <!-- Radio -->
  
    <h2>Selecione seu gênero</h2>
    <label for="genero">Masculino:</label>
    <input type="radio" id="genero" name="sx" value="Masculino"><hr>    
    <label for="genero">Feminino:</label>
    <input type="radio" id="genero" name="sx" value="Feminino"><hr>
    <label for="genero">Outros:</label>
    <input type="radio" id="genero" name="sx" value="outros"><hr>
  
  <!-- checkbox -->
   
    <h3>Escolha os cursos que gostaria de fazer</h3> 
    <input type="checkbox" name="curso" value="java">Java<br>
    
    <!-- Selected -->
    <h3><p>Cidade:</p></h3>
    <select name="cidade">
        <option value="Colombo">Colombo</option>
        <option value="Curitiba">Curitiba</option>
        <option value="Pinhais">Pinhais</option>
        <option value="S.J.Pinhais">S.J.Pinhais</option>
    </select>
    <!-- DataList -->
    <h3>Flor preferida:</h3>
    <input list="flor" name="flor">
    <datalist id="flor">
        <option value="margarida">
        <option value="tulipa">
        <option value="rosa">
        <option value="orquidea">
    </datalist><br><br>
    <!-- Data -->
    <h3>Data de Nascimento:</h3>
    <input type="date" name="dtnasc"><br>
    <!-- E-mail -->
    <h3>E-mail:</h3>
    <input type="email" name="email">
    <!-- limpar caixinhas -->
    <input type="reset" value="limpar">
    <!-- Enviar -->
    <input type="submit" value="Enviar" name="b2">
   </form>
</body>
</html>