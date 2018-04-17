<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dados{
    public function addDados($cliid, $clinome, $clifantasia, $clicnpjcpf, $cliierg, $cliend, $clibairro, $clinumero, $clicidade, $cliuf){
        
        try{
            $sql    = "INSERT INTO wimport.cliente(cliid, clinome, clifantasia, clicnpjcpf, cliierg, cliend, clibairro, clinum, clicidade, cliuf)"
                    . "VALUES($cliid, '$clinome', '$clifantasia', '$clicnpjcpf', '$cliierg', '$cliend', '$clibairro', '$clinumero', '$clicidade', '$cliuf')";
            
            $stmt   = Conexao::getConexao()->prepare($sql);
            $stmt->bindParam(":cliid",      $cliid,         PDO::PARAM_INT);
            $stmt->bindParam(":clinome",    $clinome,       PDO::PARAM_STR);
            $stmt->bindParam(":clifantasia",$clifantasia,   PDO::PARAM_STR);
            $stmt->bindParam(":clicnpjcpf", $clicnpjcpf,    PDO::PARAM_STR); 
            $stmt->bindParam(":cliierg",    $cliierg,       PDO::PARAM_STR);
            $stmt->bindParam(":cliend",     $cliend ,       PDO::PARAM_STR);
            $stmt->bindParam(":clibairro",  $clibairro,     PDO::PARAM_STR);
            $stmt->bindParam(":clinum",     $clinumero,     PDO::PARAM_STR);
            $stmt->bindParam(":clicidade",  $clicidade,     PDO::PARAM_STR);
            $stmt->bindParam(":cliuf",      $cliuf,         PDO::PARAM_STR);
            $stmt->execute();
            
            
            if($stmt->rowCount() > 0){
                
               $linha = $stmt->rowCount();
               /*$_SESSION['linha'] = $stmt->rowCount();
                            
               $_SESSION['linha'] = $_SESSION['linha'] + $linha;*/
               return $linha;
                
                
            }else{
                return "Nenhum registro inserido!";
            }
        } catch (PDOException $e){
            if($e->errorInfo[1] == 1062){
                return "Duplicidade de registro!";
            }else{
                return "Erro ao inserir dados! ".$e->getMessage();
            }
        }
    }
}