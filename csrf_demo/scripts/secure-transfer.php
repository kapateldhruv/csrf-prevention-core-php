<?php
if(!isset($_SESSION["user_id"]))
{
	Redirect("login.php");
}

$fetch="SELECT u.id,u.username,u.password,b.amount FROM users u LEFT OUTER JOIN balance b ON u.id=b.uid WHERE u.id=".$_SESSION["user_id"]." " ;
$user_data=$db->ObjectBuilder()->rawQueryOne($fetch);

if(isset($_POST["transfer"]))
{	
	if(validateCSRFtoken($_POST["csrf_name"],$_POST["csrf_token"]))
	{
		$tmaount=$_POST["tamount"];
		$remain_amount=$user_data->amount-$tmaount;
		
		$data=array("amount"=>$remain_amount);
		$db->where("id",$_SESSION["user_id"]);
		if($db->update("balance",$data))
		{
			
			Redirect("secure-transfer.php");
		}
	}
	else
	{
		Redirect("secure-transfer.php");
	}
}


?>