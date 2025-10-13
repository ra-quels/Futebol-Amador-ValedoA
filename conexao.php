<?php
   include_once 'util.php';
    
    function criar_conexao(){        
        $conexao = null;
        try{	        
            //Local
            $conexao = new PDO('mysql:host=localhost; dbname=pibic', 'root', '');

            //Nuvem
            //$conexao = new PDO('mysql:host=localhost; dbname=id19566972_academia', 'id19566972_usuario', '~vpo&^[@X0?Kj&8k');            

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
   

