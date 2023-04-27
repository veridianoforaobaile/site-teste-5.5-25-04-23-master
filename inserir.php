<?php
    include("conecta.php");

    $nome  = $_POST["nome"];
    $senha = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO alunos VALUES($nome,'$senha')" );
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: cadastro.html");


?>