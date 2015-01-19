<?php
include "./core/model/Database.php";


$db = new Database();
echo $db->connect();