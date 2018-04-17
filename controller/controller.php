<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller{
    
    public  $conIndex = false;

    public  $conIndext = false;
    public function index(){
        
        if(isset($_POST['importar'])){
        
            $tmp_arquivo = ($_FILES["arquivo"]["tmp_name"]) or die("Não foi possível abrir arquivo");
        
            $dados = file($tmp_arquivo);

        
            $i = 0;
            $j = 0;
            
            foreach ($dados as $dado){
                $dado      = trim($dado);
                $valor     = explode(',',$dado);
                //var_dump($valor);
                if(!empty($dado)){

                    $id         = $valor[$i]; $i = $i + 1; 
                    $nome       = $valor[$i]; $i = $i + 1; 
                    $fantasia   = $valor[$i]; $i = $i + 1; 
                    $cnpj       = $valor[$i]; $i = $i + 1; 
                    $ie         = $valor[$i]; $i = $i + 1; 
                    $end        = $valor[$i]; $i = $i + 1; 
                    $bairro     = $valor[$i]; $i = $i + 1; 
                    $numero     = $valor[$i]; $i = $i + 1; 
                    $cidade     = $valor[$i]; $i = $i + 1; 
                    $uf         = $valor[$i]; $i = 0; 
                    
                    $c = new Dados;
                    $this->conIndex = $c->addDados($id,$nome,$fantasia,$cnpj,$ie,$end,$bairro,$numero,$cidade,$uf);
                    
                    if($this->conIndex > 0){
                    $this->conIndext = ($this->conIndext + $this->conIndex);
                    }
                }

            }
        }
    }
}
    
    
 ?>