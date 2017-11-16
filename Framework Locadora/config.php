<?php
//declaração dos namespaces dos controladores e instanciação dos objetos
use Project\Controller\DadosController;
$dadosController = new DadosController();


//configuração do banco de dados
$_ENV['config'] = [
    'host' => 'localhost',
    'dbname' => 'lolcadora',
    'user' => 'root',
    'password' => '',
];
