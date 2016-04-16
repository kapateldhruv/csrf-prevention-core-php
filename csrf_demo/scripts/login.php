<?php

if(isset($_SESSION["user_id"]))
{
	Redirect("dashboard.php");
}

if(isset($_POST["login"]))
{
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
 
	if($uname!="" && $pwd!="")
	{ 
		$fetch="SELECT id,username,password FROM users WHERE username='".$uname."'";
		$user_data=$db->ObjectBuilder()->rawQueryOne($fetch);
		
		if($user_data->id!="")
		{
			if($pwd==$user_data->password)
			{
				$_SESSION["user_id"]=$user_data->id;
				$_SESSION["user_name"]=$user_data->username;
				Redirect("dashboard.php");
			}
		}
		else
		{
			Redirect("login.php");
		}
	}
	else
	{
		Redirect("login.php");
	}

}


?>