<?php
namespace ticketrequest\core\model;
use ticketrequest\core\model\Database as db;

/**
 * Description of Session
 *
 * @author Abdessamad Amzerin
 */
class Session {
    
    public $id;
    public $Code;
    public $Date;
    
    function __construct($prms1=null, $prms2=null)
    {
        $this->Code =  $prms1;
        $this->Date =  $prms2;
    }
    
    public function addSession()
    {   
        $db = new db();
        if($db->connect()){
            $query  = "INSERT INTO  `session` (  `id` ,  `code` ,  `date` ) 
                        VALUES ( NULL , :code,  :date)";
            $v = $db->pdo->prepare($query);       
            $v->execute(
                array(
                    "code" => $this->Code,
                    "date"  => $this->Date
                )
            );
        }
    }


    
    
    
        }
