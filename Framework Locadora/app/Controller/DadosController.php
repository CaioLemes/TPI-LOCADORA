<?php
namespace Project\Controller;

use Project\Db\QueryBuilder;

class DadosController
{
    public function index()
    {
        //acessar o bd
        $q = new QueryBuilder();
        //receber os dados
        $dados = $q->select('filmes');
        //acessar a view
        require './app/views/index.php';

    }

    public function salvar()
    {
        //receber os dados
        $dados['nome'] = $_POST['nome'];
        $dados['data_nascimento'] = $_POST['nascimento'];

        //acessar o banco
        $q = new QueryBuilder();

        //guardar os dados
        $q->insert('filmes', $dados);
        
        //redirecionar para a rota /
        header('Location: /');
    }
}