<?php
session_start();

define("SCRIPT","scripts/");
define("LIB","lib/");

//include function file
require_once(LIB."functions.php");

//include database class
require_once(LIB."MysqliDb.php");
// instantiate
$db = new MysqliDb ('localhost', 'root', '', 'bank');


?>