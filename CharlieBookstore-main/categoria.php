<?php
    $nome = $_POST["nome"];
    $desc = $_POST["desc"];

    if(isset($_POST["ativo"])){
        $ativo = 1;
    }else{
        $ativo = 0;
    }

    //echo "$nome e $desc";

    include 'start-mysql.php';

    $cmdtext = "INSERT INTO CATEGORIA(CATEGORIA_NOME, CATEGORIA_DESC) VALUES('" . $nome . "','" . $desc . "')";
        $cmd = $pdo->prepare($cmdtext);
        $status = $cmd->execute();
        echo "Inserido com sucesso";

        //Executa o comando e verifica se teve sucesso
        // $isInputEmpty = $nome && $desc;

        // if($isInputEmpty){
        //     //header('Location: menu-adm.php');
        // } 
        // else{
        //     echo "Ocorreu um erro ao inserir";
        //    //header('Location: menu-adm-erro.php');
        // }
