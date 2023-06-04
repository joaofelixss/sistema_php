<?php

//se existir a variavel submit//
  if(isset($_POST['submit']))
  //ele vai salvar nosso banco de dados//
  {
    /*print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('email: ' . $_POST['email']);
    print_r('<br>');
    print_r('telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('genero: ' . $_POST['genero']);
    print_r('<br>');
    print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    print_r('<br>');
    print_r('cidade: ' . $_POST['cidade']);
    print_r('<br>');
    print_r('estado: ' . $_POST['estado']);
    print_r('<br>');
    print_r('Endereco: ' . $_POST['endereco']);*/

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereço) VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');
  }

?>
<!DOCTYPE html>
<html lang="en pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="cadastrese.css">
</head>

<body>
  <a class="botao-voltar" href="home.php">Voltar</a>
  <div class="box">
    <form action="index.php" method="POST">
      <fieldset>
        <legend><b>Formulário de Clientes</b></legend>
        <br>
        <div class="div inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="labelImput">Nome completo</label>
        </div>
        <br><br>
        <div class="div inputBox">
          <input type="password" name="senha" id="senha" class="inputUser" required>
          <label for="senha" class="labelImput">Senha</label>
        </div>
        <br><br>
        <div class="div inputBox">
          <input type="twxt" name="email" id="email" class="inputUser" required>
          <label for="email"class="labelImput">Email</label>
        </div>
        <br><br>
        <div class="div inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" required>
          <label for="Telefone"class="labelImput">Telefone</label>
        </div>
        <br>
        <p>Sexo:</p>
        <input type="radio" id="feminino" name="genero" value="feminino" required>
        <label for="feminino">feminino</label>
        <br>
        <input type="radio" id="masculino" name="genero" value="masculino" required>
        <label for="masculino">masculino</label>
        <br>
        <input type="radio" id="outro" name="genero" value="outro" required>
        <label for="outro">outro</label>
        <br><br><br>
          <label for="data_nascimento"><b>Data de nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" required>
        <br><br><br>
        <div class="div inputBox">
          <input type="text" name="cidade" id="cidade" class="inputUser" required>
          <label for="cidade"class="labelImput">Cidade</label>
        </div>
        <br><br>
        <div class="div inputBox">
          <input type="text" name="estado" id="estado" class="inputUser" required>
          <label for="estado"class="labelImput">estado</label>
        </div>
        <br><br>
        <div class="div inputBox">
          <input type="text" name="endereco" id="endereco" class="inputUser" required>
          <label for="endereco"class="labelImput">endereco</label>
        </div>
        <br><br>
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form>
  </div>
</body>

</html>