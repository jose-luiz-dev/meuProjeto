<?php

require_once 'lib/database/Conexao.php';
require_once 'app/core/Core.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ErroController.php';
require_once 'app/model/Consulta.php';

require_once 'vendor/autoload.php';


$template = file_get_contents('app/template/estrutura.html');

ob_start();
    $core = new Core;
    $core->start($_GET);
    $retorno = ob_get_contents();
ob_end_clean();

$pagina = str_replace('{{dinamica}}', $retorno, $template);
echo $pagina;