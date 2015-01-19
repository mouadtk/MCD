<?php

$config = array(
    "db" => array(
        "db_local" => array(
            "dbname" => "mcd",
            "username" => "root",
            "password" => "",
            "host" => "localhost"
        ),
        "db_server" => array(
            "dbname" => "",
            "username" => "",
            "password" => "",
            "host" => "localhost"
        )
    ),
    "urls" => array(
        "baseUrl" => "http://198.23.87.123/"
    ),
    "paths" => array(
        "resources" => "/path/to/resources",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
 
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 