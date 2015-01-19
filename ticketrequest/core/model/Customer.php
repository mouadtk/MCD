<?php

namespace ticketrequest\core\model;
use core\model\Database;
/**
 * Description of customer
 *
 * @author tmouad
 */

class Customer {
         
    public $id;
    public $first_name;
    public $last_name;
    public $email;

    function __construct($prms1=null, $prms2=null, $prms3=null)
    {        
        $this->first_name =  $prms1;
        $this->last_name =  $prms2;
        $this->email =  $prms3;
    }
    
    public function add()
    {   
        $db =  new  Database();        
        if($db->connect()){
            $query  = "INSERT INTO  `customer` (  `id` ,  `First_name` ,  `Last_name`, `Email` ) 
                        VALUES ( NULL , :fisrtname, :lastname, :email  )";        
         //   var_dump($db->pdo);
           // $stmt->execute();
        }
        //return mysql_query($query);
      
    }
    
}
