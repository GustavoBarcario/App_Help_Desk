<?php
    session_start();

    print_r($_SESSION);
    echo '<hr/>';

    //varivael que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;
    
    //usuarios do sistema
    $usuarios_app = array(
      array('email' => 'adm@teste.com.br', 'senha' => '123456'),
      array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    foreach ($usuarios_app as $key => $user) {

      /*
      echo 'Usuário APP: ' . $user['email'] . ' / ' . $user['senha'];
      echo '<br/>';
      echo 'Usuário FORM: ' . $_POST['email'] . ' / ' . $_POST['senha'];
      echo '<hr/>';
      */

      if (($user['email'] == $_POST['email']) && ($user['senha'] == $_POST['senha'])){
        $usuario_autenticado = true;
      }
    }

    if ($usuario_autenticado) {
      echo "Usuário autenticado";
      $_SESSION['autenticado'] = "SIM";
    }else {
      $_SESSION['autenticado'] = "NAO";
      header('Location: index.php?login=erro');
      //echo "Erro na autenticação do usuário";
    }

    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */

    /*
    print_r($_GET);

    echo '<br/>';

    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha'];
    */

    /*
    print_r($_POST);

    echo '<br/>';

    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
    */
?>