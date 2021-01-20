<?php

class Consulta{

    public static function exibeConsulta(){
        
        $conn = conexao::getConn();

        $sql = "SELECT * FROM usuario_acesso ORDER BY id";
        $sql = $conn->prepare($sql);
        $sql->execute();

        $resultado = array();

        while ($row = $sql->fetchObject('Consulta')){
            $resultado[] = $row;
        }

        if(!$resultado){
            throw new Exception("Nenhum registro encontrado");
        }
        
        return $resultado;
    }

}