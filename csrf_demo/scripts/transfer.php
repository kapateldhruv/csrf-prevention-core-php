<?php
if(!isset($_SESSION["user_id"]))
{
	Redirect("login.php");
}

$fetch="SELECT u.id,u.username,u.password,b.amount FROM users u LEFT OUTER JOIN balance b ON u.id=b.uid WHERE u.id=".$_SESSION["user_id"]." " ;
$user_data=$db->ObjectBuilder()->rawQueryOne($fetch);

if(isset($_POST["transfer"]))
{	
	
		$tmaount=$_POST["tamount"];
		$remain_amount=$user_data->amount-$tmaount;
		
		$data=array("amount"=>$remain_amount);
		$db->where("id",$_SESSION["user_id"]);
		if($db->update("balance",$data))
		{
			
			Redirect("transfer.php");
		}
	
}


?>