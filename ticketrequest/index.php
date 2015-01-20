<?php
namespace ticketrequest;
use ticketrequest\core\model\Database;
use ticketrequest\core\model\Customer;
use ticketrequest\core\model\Session;

include './core/model/Database.php';
include './core/model/Customer.php';
include './core/model/Session.php';

/**********************************************************
 * $pr = new Customer('mouad','tribak','mail@gmail.com'); *
 * $pr->add();                                            *
 **********************************************************/

$db = new Database(); 
$d = new Session('dxchh6','2015-01-07');
//$d->add();
print_r($d->addSession());