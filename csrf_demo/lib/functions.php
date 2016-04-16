<?php

function Redirect($url)
{
	header("Location: ".$url);
	die();
}

function getCSRFname()
{
	$csrf_name="CSRF".md5(uniqid(mt_rand(), true));
	return $csrf_name;
}

function getCSRFtoken($csrf_name)
{
	$csrf_token=md5(uniqid(mt_rand(), true));
	savesession($csrf_name,$csrf_token);
	return $csrf_token;
}

function savesession($csrf_name,$csrf_token)
{
	//$_SESSION["csrf_name"]=$csrf_name;
	//$_SESSION["csrf_token"]=$csrf_token;
	$_SESSION[$csrf_name]=$csrf_token;
}

function validateCSRFtoken($entered_csrf_name,$entered_csrf_token)
{
	if(isset($entered_csrf_name) && isset($entered_csrf_token))
	{
		if($entered_csrf_token==$_SESSION[$entered_csrf_name])
		{
			$status=true;
		}
		else
		{
			$status=false;
		}
	}
	else
	{
		$status=false;
	}
	
	removesession($entered_csrf_name);
	return $status;
}

function removesession($entered_csrf_name)
{
	unset($_SESSION[$entered_csrf_name]);
}

?>