<?php
    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //echo $texto;

    $arquivo = fopen('arquivo.txt', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('location: home.php');

    /*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    */
?>