<?php

class HomeController
{

    public function index()
    {
        include_once 'app/view/home.html';

        try {

            $exibirConsulta = Consulta::exibeConsulta();

            var_dump($exibirConsulta);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
