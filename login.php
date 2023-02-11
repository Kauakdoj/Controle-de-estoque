<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de Login</title>
    <link rel="stylesheet" href="./css/login.css" />
  </head>
  <body>
        <div class="box">
                <fieldset>
                    <legend><b>Login</b></legend>
                    <br>

                    <form action="./js_php/testelogin.php" method="POST">
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="nome" class="labelInput">Email</label>
                    </div>
                    <br><br>
    
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>

                    
                <input type="submit" name="submit" class="inputSubmit"><br>
                </form>
                <div style="margin:auto;margin-top:10px; width:30px"><a href="home.php" style=" color: red">Voltar</a></div>
      </fieldset>
    </div>
    <script src="./js_php/voltar.js"></script>
  </body>
</html>
