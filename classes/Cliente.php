<?php

require 'Conexao.php';


class Cliente {
    
   private $conexao;
   
   public function __construct(){
       $this->conexao = Conexao::getConexao();
   }
    
   public function listar(){
       $sql = 'SELECT * FROM cliente;';
       
       $q = $this->conexao->prepare($sql);
       $q->execute();
       
       return $q;
   }
   
   public function buscar($codcli) {
       $sql = 'SELECT * FROM cliente WHERE codcli = ?;';       
       $q = $this->conexao->prepare($sql);
       $q->bindParam(1, $codcli);
       $q->execute();
       
       return $q;
   }
   
   public function adicionar($nomcli, $endcli, $telcli) {
       $sql = 'INSERT INTO cliente(nomcli, endcli, telcli) VALUES (?, ?, ?);';
       $q = $this->conexao->prepare($sql);
       
       $q->bindParam(1, $nomcli);
       $q->bindParam(2, $endcli);
       $q->bindParam(3, $telcli);
       
       $q->execute();
       
   }
   
   public function editar($codcli, $nomcli, $endcli, $telcli) {
       $sql = 'UPDATE cliente SET nomcli = ?, endcli = ?, telcli = ? WHERE codcli = $codcli';
       $q = $this->conexao->prepare($sql);
       
       $q->bindParam(1, $nomcli);
       $q->bindParam(2, $endcli);
       $q->bindParam(3, $telcli);
       
       $q->execute();
   }
   
   
   
}
