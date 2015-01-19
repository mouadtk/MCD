<?php


/**
 * Description of customer
 *
 * @author tmouad
 */
class customer {
         
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
        if($this->event != null){
        $query  = "INSERT INTO  `deals` (  `id` ,  `event` ,  `active` ) 
                    VALUES ( NULL ,  '".$this->event."',  '1')";
        return mysql_query($query);
        }
    }
    
}
