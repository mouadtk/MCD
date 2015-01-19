<?php


namespace ticketrequest\core\model;
include "config.php";
/**
 * Description of Database
 *
 * @author tmouad
 */
class Database {
    
    private $db_host = ''; 
    private $db_user = ''; 
    private $db_pass = ''; 
    private $db_name = ''; 
    public  $pdo = false;
    public static $con = false;
    
    
    function __construct(){
        
        $this->db_host = $config['database']['host'];
        $this->db_user = $config['database']['username'];
        $this->db_pass = $config['database']['password'];
        $this->db_name = $config['database']['dbname'];
    }
    
    public function connect()   {
        if(!self::$con)
        {
            try {
                $this->pdo = new PDO("mysql:host=$this->db_host;dbname=".$this->db_name, $this->db_user, $this->db_pass);
                var_dump($this->pdo );
                return self::$con = true;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        } 
        else{
            return false; 
        }
    }
    
    public function disconnect() {
        self::$con = false;
    }
    
    
}

