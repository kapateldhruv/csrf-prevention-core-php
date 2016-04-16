<?php
if(!isset($_SESSION["user_id"]))
{
	Redirect("login.php");
}
$fetch="SELECT u.id,u.username,u.password,b.amount FROM users u LEFT OUTER JOIN balance b ON u.id=b.uid WHERE u.id=".$_SESSION["user_id"]." " ;
$user_data=$db->ObjectBuilder()->rawQueryOne($fetch);

?>