<?php
    include_once 'conexaoBD.php';
    
    if(isset($_POST['login'])){
        $login = $_POST['login'];
    }
    if(isset($_POST['senha'])){
        $senha = $_POST['senha'];
    }
    
    // Consulta no banco:
    $sqlLogin = $conexao->prepare('SELECT COUNT(*) FROM usuarios
                                   WHERE LOGIN LIKE ? AND SENHA LIKE SHA1(?)');
    $sqlLogin->bind_param('ss',$login,$senha);
    $sqlLogin->execute();
    $sqlLogin->bind_result($acesso_);
    $sqlLogin->fetch();
    $sqlLogin->close();
    
    if(empty($_POST['login'])){
        $msg = "INSIRA O SEU LOGIN E SENHA.";
    }elseif($acesso_){
        header("Location: painel.php");
    }else{
        $msg = "ACESSO NEGADO.";
    }
    
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logue no Sistema</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page_login">        
        <fieldset>
            <form action="painel.php" method="post">
                <p><?=$msg;?></p>
                <label>Login:</label>
                <input type="text" name="login" />
                <br/><br/>
                <label>Senha</label>
                <input type="password" name="senha" />
                <br/><br/>
                <input class="btn" type="submit" value="Logar" />
            </form>
        </fieldset>        
    </body>
</html>


