<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- STYLE PERSONALIZADO -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"><h3 class="text-center" style="color:green">Plataforma de Gerenciamento de midias Sociais</h3></div>
            </div>
            <div class="row"> 
                <div class="col-md-12">                                  
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="painel.php?page=home">Home</a></li>
                        <li role="presentation"><a href="painel.php?page=monitoramento">Monitoramento</a></li>
                       
                        <li role="presentation">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" 
                               role="button" aria-haspopup="true" aria-expanded="false">
                                Analítico <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li role="presentation">
                                    <a href="painel.php?page=analitico">Graficos</a>
                                </li>                                    
                            </ul>                      
                         
                        </li>
                        <li role="presentation"><a href="painel.php?page=reclamacoes">Reclamações</a></li>
                        </ul>
                </div>
                <div class="col-md-12">
                               
                   <!-- CONTEUDO DINAMICO -->
                   <?php
                   if(isset($_GET['page'])){
                    switch($_GET['page']){
                        case 'analitico': include("pages/analitico.php"); break;
                        case 'monitoramento': include("pages/monitoramento/monitoramento.php"); break;
                        case 'home': include("pages/home.php"); break;
                        case 'reclamacoes': include("pages/reclamacoes.php"); break;
                        default: echo "<h1>Algo errado ocorreu</h1>";
                    }
                   }else{
                       echo "<h1> </h1>";
                   }
                   ?>
                </div>
            </div>
        </div>
    </body>
</html>
