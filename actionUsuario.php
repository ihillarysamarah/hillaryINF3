<?php include('header.php'); ?>

<?php
    //Bloco para Declaração de Variavéis
    $fotoUsuario = $nomeUsuario = $cidadeUsuario = $telefoneUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $erroPreenchimento = false;

    //Verifica o método de envio do FORM
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Verifica se o campo nomeUsuario do formulário está vazio utilizando a função empty
        if(empty($_POST["nomeFormulario"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>NOME</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        }
    }
    else{
        $nomeUsuario = $_POST["nomeUsuario"];
    }

    //Validação do campo cidadeUsuario
    if(empty($_POST["cidadeUsuario"])){
        echo "<div class='alert alert-warning text-center'>O campo <strong>CIDADE</strong> é obrigatório!</div>";
        $erroPreenchimento = true;
    }
    else{
        $cidadeUsuario = $_POST["cidadeUsuario"];
    }

    //Validação do campo telefoneUsuario
    if(empty($_POST["telefoneUsuario"])){
        echo "<div class='alert alert-warning text-center'>O campo <strong>TELEFONE</strong> é obrigatório!</div>";
        $erroPreenchimento = true;
    }
    else{
        $telefoneUsuario = $_POST["telefoneUsuario"];
    }

    //Validação do campo emailUsuario
    if(empty($_POST["emailUsuario"])){
        echo "<div class='alert alert-warning text-center'>O campo <strong>EMAIL</strong> é obrigatório!</div>";
        $erroPreenchimento = true;
    }
    else{
        $emailUsuario = $_POST["emailUsuario"];
    }

    //Validação do campo senhaUsuario
    if(empty($_POST["senhaUsuario"])){
        echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
        $erroPreenchimento = true;
    }
    else{
        $senhaUsuario = $_POST["senhaUsuario"];
    }

    //Validação do campo confirmarSenhaUsuario
    if(empty($_POST["confirmarSenhaUsuario"])){
        echo "<div class='alert alert-warning text-center'>O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!</div>";
        $erroPreenchimento = true;
    }
    else{
        $confirmarSenhaUsuario = $_POST["confirmarSenhaUsuario"];
    }
?>

<?php include('footer.php'); ?>