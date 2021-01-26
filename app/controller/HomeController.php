<?php

class HomeController
{

    public function index()
    {

        try {
            $exibirConsulta = Consulta::exibeConsulta();

            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('home.html');

            $parametro = array();
            $parametro['usuarios']= $exibirConsulta;

            $conteudo = $template->render($parametro);
            echo $conteudo;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
