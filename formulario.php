<?php

if(isset($_POST['submit'])){
  /*
  print_r('nome: '.$_POST['nome']);
  print_r('<br>');
  print_r('email: '.$_POST['email']);
  print_r('<br>');
  print_r('telefone: '.$_POST['telefone']);
  print_r('<br>');
  print_r('genero: '.$_POST['sexo']);
  print_r('<br>');
  print_r('data de nascimento: '.$_POST['data_nasc']);
  print_r('<br>');
  print_r('cidade: '.$_POST['cidade']);
  print_r('<br>');
  print_r('estado: '.$_POST['estado']);
  print_r('<br>');
  print_r('endereço: '.$_POST['endereco']);
  print_r('<br>');
}*/
include_once('./js_php/config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
header('Location: login.php');

}

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/formulario.css" />
    <link rel="stylesheet" href="./css/formatarF.css" />
    <title>formulario</title>
  </head>
  <body>
  <div class="box">
    <form action="formulario.php" method="POST" id="form">
        <fieldset>
            <legend><b>Cadastro</b></legend>
            <!--formulario parte 1-->
            <br>

            <div class="inputBox">
                <input
                  type="text"
                  name="nome"
                  id="nome"
                  class="inputUser inputs required"
                  oninput="nameValidate()"
                  required
                />
                <label for="nome" class="labelInput">Nome completo</label>
                <span class="span-required">O nome deve ter no minimo 3 caracteres</span>
              </div>
              <br>

              <div class="inputBox">
                <input
                  type="text"
                  name="email"
                  id="email"
                  class="inputUser inputs required"
                  oninput="emailValidate()"
                  required
                />
                <label for="email" class="labelInput">Email</label>
                <span class="span-required">O Email deve ter no minimo 8 caracteres</span>
              </div>
              <br>

              <div class="inputBox">
                <input
                  type="password"
                  name="senha"
                  id="senha"
                  class="inputUser inputs required"
                  oninput="senhaValidate()"
                  required
                />
                <label for="senha" class="labelInput">Senha</label>
                <span class="span-required">A senha deve ter no minimo 8 caracteres</span>
              </div>
              <br>

              <div class="inputBox">
                <input
                  type="text"
                  name="telefone"
                  id="telefone"
                  class="inputUser inputs required"
                  oninput="telefoneValidate()"
                  required
                />
                <label for="telefone" class="labelInput">Telefone</label>
                <span class="span-required">O telefone deve ter no minimo 11 caracteres</span>
              </div>
              <br>
            <!--formulario parte 2-->
                <!--sexo-->
                
          <p style="font-weight: bold">Sexo:</p>
          <input type="radio" name="sexo" value="Feminino" id="feminino" />
          <label for="feminino">Feminino</label>
          <br />
          <input
            type="radio"
            name="sexo"
            value="Masculino"
            id="masculino"
            checked
          />
          <label for="masculino">Masculino</label>
          <br />
          <input type="radio" name="sexo" id="outro" value="Outro" />
          <label for="outro">Outro</label>
          <br /><br />
          <!--formulario parte 3-->
                <!--Data-->
            
          <label for="data_nasc"><b>Data de nascimento: </b></label>
          <input
            type="date"
            name="data_nasc"
            id="data_nasc"
            required
          />

          <br /><br />

            <!--formulario parte 3-->
                <!--Endereço-->
                <div class="inputBox">
                    <input
                      type="text"
                      name="cidade"
                      id="cidade"
                      class="inputUser inputs required"
                      oninput="cidadeValidate()"
                      required
                    />
                    <label for="cidade" class="labelInput">Cidade</label>
                    <span class="span-required">O nome da cidade deve ter no minimo 3 caracteres</span>
                  </div>
                  <br>

                  <div class="inputBox">
                    <input
                      type="text"
                      name="estado"
                      id="estado"
                      class="inputUser inputs required"
                      oninput="estadoValidate()"
                      required
                    />
                    <label for="estado" class="labelInput">Estado</label>
                    <span class="span-required">O nome do Estado deve ter no minimo 2 caracteres</span>
                  </div>
                  <br>

                  <div class="inputBox">
                    <input
                      type="text"
                      name="endereco"
                      id="endereco"
                      class="inputUser inputs required"
                      oninput="enderecoValidate()"
                      required
                    />
                    <label for="endereco" class="labelInput">Endereço</label>
                    <span class="span-required">O nome do <b>Endereço</b> deve ter no minimo 8 caracteres</span>
                  </div>
                  <br><br>

                <input type="submit" name="submit" id="submit" class="submit"/><br>
                <div style="margin:auto;margin-top:10px; width:30px"><a href="home.php" style=" color: red">Voltar</a></div>

        </fieldset>
        </form>
    </div>
<script src="./js_php/formulario.js"></script>
  </body>
</html>
