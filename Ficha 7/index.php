<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Você não tem permissão para aceder a estas informações, por favor faça login ou registe-se";
      echo"<br><a href='View.php'>Faça Login</a> Para ler o conteúdo";
    }
?>