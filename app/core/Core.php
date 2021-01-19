<?php

class Core
{

    public function start($urlGet)
    {
        
        $acao = 'index';

        if(isset($urlGet['p'])){
            $controller = ucfirst($urlGet['p'] . 'Controller');
        } else{
            $controller = 'HomeController';
        }

        if (!class_exists($controller)) {
            $controller = 'ErroController';
        }

        call_user_func_array(array(new $controller, $acao), array());
    }
}
