<?php
require_once("config.php");
require_once(SCRIPT."login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<?php include "includes/common_css.php";?>
</head>

<body>
<form action="" method="post">
    <div class="frm_div">
        <p>
        <label>Username</label>
        <input type="text" name="uname"/>	
        </p>
        
        <p>
        <label>Password</label>
        <input type="password" name="pwd"/>	
        </p>
        <p>
        <label>&nbsp;</label>
        <input type="submit" name="login" value="Login"/>	
        </p>
    </div>    
</form>
</body>
</html>