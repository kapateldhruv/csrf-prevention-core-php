<?php
require_once("config.php");

if(isset($_SESSION["user_id"]))
{
	session_destroy(); 
	Redirect("login.php");
}
else
{
	Redirect("login.php");
}
?>