# csrf-prevention-core-php
==========================

This project demonstrate how CSRF attack occur as well as prevention using secret validation token.

## Getting started
--------------------
1. Copy cheat and csrf_demo to www
2. Import database to MySql located at csrf_demo/db/bank.sql

## How to run
1. Run csrf_demo and login with username and password in users table.
2. Keep your session open and run attack in new tab.
3. Click on more offers link.
4. Now check your balance in csrf_demo some amount deducted without your intention.

## Installing
Copy following functions from csrf_demo/lib/functions.php to your project.

```````````
function getCSRFname()
{
	$csrf_name="CSRF".md5(uniqid(mt_rand(), true));
	return $csrf_name;
}
```

````
function getCSRFtoken($csrf_name)
{
	$csrf_token=md5(uniqid(mt_rand(), true));
	savesession($csrf_name,$csrf_token);
	return $csrf_token;
}

````

````
function savesession($csrf_name,$csrf_token)
{
	//$_SESSION["csrf_name"]=$csrf_name;
	//$_SESSION["csrf_token"]=$csrf_token;
	$_SESSION[$csrf_name]=$csrf_token;
}

```

```
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

```

```
function removesession($entered_csrf_name)
{
	unset($_SESSION[$entered_csrf_name]);
}

```

Add tokens in hidden form field in each form. See secure-transfer.php

```
<?php $csrf_name=getCSRFname(); $csrf_token=getCSRFtoken($csrf_name);?> 
<input type="hidden" name="csrf_name" value="<?php echo $csrf_name; ?>">
<input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
```

Validate tokens before processing. See csrf_demo/scripts/secure-transfer.php
```
if(validateCSRFtoken($_POST["csrf_name"],$_POST["csrf_token"]))
	{
	 // your code 
	}
```
