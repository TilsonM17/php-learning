<?php
namespace DB;

use PDO;
use PDOException;


error_reporting(E_ALL);

class Database{

    const DB_DNS= "127.0.0.1";
    const DB_NAME = "teste";
    const DB_USER = "root";
    const DB_PASS = "";

    private static $ligacao;

    private static function Conectar(){
        try{
            self::$ligacao = new PDO(
                'mysql:host='.self::DB_DNS.
                ';dbname='. self::DB_NAME,
                self::DB_USER,
                self::DB_PASS
            );
            self::$ligacao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
           echo "<h1>Sorry but <strong> {$e->getMessage()} </strong> </h1>";
        }

    }

    private static function Fechar(){
        self::$ligacao = null;
    }

    public static function Insert(string $table_name,array $params){
            #Open Conection
          self::Conectar();
       
        $sql = "INSERT INTO {$table_name}(";
        # Inserir as chaves
        foreach(array_keys($params) as $item){
            $sql .= "$item,";
        }
        #Retirar a ultima virgula da query
        $sql = substr($sql,0,strlen($sql)-1);
        $sql .= ") VALUES (";

        # Inserir os values
        
        foreach(array_values($params) as $item){
            if(is_string($item))
                $sql .= "'$item',";
            else
                $sql .= "$item,";

        }
        #retirar a virgula
        $sql = substr($sql,0,strlen($sql) - 1);
        $sql .= ");";
        

        #Estamos prontos para inserir na base de Dados

       self::$ligacao->query($sql);


     //   echo "Esta consumado";


        # Fechar conecção
        self::Fechar();
        
    }

}

Database::Insert('pessoa',[
    'nome' => 'Tilson Mateus',
    'idade' => 34,
    'sexo' => 'M'
]);