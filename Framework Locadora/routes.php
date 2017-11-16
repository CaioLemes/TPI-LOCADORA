<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':
       
        $dadosController->index();
        break;

    case '/index':
       
        require './app/views/index.php';
        break;
   
    case '/cadastro':

        require './app/views/cadastro.php';
        break;

    case '/salvar':

        $dadosController->salvar();
        break;
           
    default:
        die('Essa rota não é valida');
        break;

    case '/catalogo':

        require './app/views/catalogo.php';
        break;

    case '/lancamento':

        require './app/views/lancamento.php';
        break;    

   case '/admin_pagina':

        require './app/views/admin_pagina.php';
        break;     

}
