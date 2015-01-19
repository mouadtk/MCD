<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "../../config.php";



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
    public static $con = false;
    
    function __construct(){
        $this->db_host = $config['database']['host'];
        $this->db_user = $config['database']['username'];
        $this->db_pass = $config['database']['password'];
        $this->db_name = $config['database']['dbname'];
    }
    
    public function connect()   {
        if(!$this->con)
        {
            $myconn = mysql_connect($this->db_host,$this->db_user,$this->db_pass);
            if($myconn)
            {
                $seldb = mysql_select_db($this->db_name,$myconn);
                if($seldb)
                {
                    $this->con = true; 
                    return true; 
                } else
                {
                    return false; 
                }
            } else
            {
                return false; 
            }
        } else
        {
            return true; 
        }
    }

}

