<?php
   include_once 'util.php';
    
    function criar_conexao(){        
        $conexao = null;
        try{	        
        $host = getenv('DB_HOST');
        $dbname = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');
        $port = getenv('DB_PORT');

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
        $conexao = new PDO($dsn, $user, $pass);
        $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conexao;    

		}catch (PDOException $erro){
            criar_arquivo_erro($erro);
            die();
        }	        
        
    }

    function fechar_conexao(){
        $conexao = null;
        return $conexao;
    }
   

