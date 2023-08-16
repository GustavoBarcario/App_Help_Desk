<?php
    session_start();

    /*
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    //remover indices do array de sessão
    unset($_SESSION["x"]); //remover indice apenas se ele existir

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    //destruir a variavel de sesssão
    session_destroy(); //sera destruida
    //forçar redirecionamento

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    */

    session_destroy();
    header('Location: index.php');
?>