<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conexao{
    
     


    public static $instance;

    public static function getConexao(){
        /** 
        $host   = "127.0.0.1";
        $bd     = "wimport";
        $user   = "root";
        $pwd    = "";
        
        if(!isset(self::$instance)){
            self::$instance = new PDO ("mysql:host:{$host}; dbname={$bd}",$user,$pwd);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }return self::$instance;
         */
         
        try
        {

            $servidor = "127.0.0.1";
            //$instancia = "sql2016";
            //$porta = 1433;
            $database = "wimport";
            $usuario = "root";
            $senha = "";

            //$instance = new PDO( "sqlsrv:Server={$servidor}\\{$instancia},{$porta};Database={$database}", $usuario, $senha );
            $instance = new PDO( "mysql:host={$servidor};dbname={$database}", $usuario, $senha );
        }
        catch ( PDOException $e )
        {
            echo "Drivers disponiveis: " . implode( ",", PDO::getAvailableDrivers() );
            echo "\nErro: " . $e->getMessage();
            exit;
        }return $instance;
    }
    public static $instancemssql;
    public function getConexaomssql(){
        try
        {

            $servidor = "127.0.0.1";
            $instancia = "mssql";
            $porta = 1433;
            $database = "MAX";
            $usuario = "sa";
            $senha = "macro01";

            $instancemssql = new PDO( "sqlsrv:Server={$servidor}\\{$instancia},{$porta};Database={$database}", $usuario, $senha );
            
        }
        catch ( PDOException $e )
        {
            echo "Drivers disponiveis: " . implode( ",", PDO::getAvailableDrivers() );
            echo "\nErro: " . $e->getMessage();
            exit;
        }return $instancemssql;
        
    }
}