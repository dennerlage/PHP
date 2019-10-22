<?php


class Conexao {
    
    public static function getConexao() {
        
        $host = 'localhost';
        $porta = 3306;
        $dbName = 'bd_conexao';
        
        $usuario = 'root';
        $senha = '';
        $con = new PDO ("mysql:host=".$host.";port=".$porta.";dbname=".$dbName."", $usuario, $senha);

        return $con;
    }
    
}
