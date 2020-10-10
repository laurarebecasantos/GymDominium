<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8"/>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>

  <img src="../imagens/logo.png" alt="some text" width="180" height="80">

  <div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>

    <div class="content">
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form action="login_p.php" method="POST">
          <p>
            <label for="nome_login">Email</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="nome@gmail.com" class="input is-large"/>
          </p>

          <p>
            <label for="email_login">Senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" class="input is-large"
              placeholder="*************" />
          </p>

          <?php
          if(isset($_SESSION['nao_autenticado'])) { 
            echo "<div class='notification is-danger'>
                    <p style='font-size: 14px; color: red;'>Usuário ou senha inválidos.</p>
                </div>";
          }
          unset($_SESSION['nao_autenticado']);
          ?>
          
          <p>
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
            <label for="manterlogado">Manter-me logado</label>
          </p>

          <p>
            <input type="submit" value="Logar" class="button is-block is-link is-large is-fullwidth" id="btnlogar" name="btnlogar" />
          </p>

        </form>
      </div>

    </div>
  </div>
</body>

</html>
