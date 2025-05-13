<?php

    if($_POST['cxnome'] != ""){
        include_once "../factory/conexao.php";
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $idade = $_POST["cxidade"];
        $comando = "INSERT INTO tbcliente(NOME, EMAIL, IDADE) 
                    VALUES ('$nome', '$email', '$idade');";
        $query = mysqli_query($conn, $comando);
        echo "  <script>
                    alert('Dados Cadastrados!');
                    window.location.href = '../view/cadcliente.php';
                </script>";
    }else{
        echo "Dados não cadastrados";
    }


?>