<?php
require_once("config.php");
require_once(SCRIPT."secure-transfer.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Transfer</title>
<?php include "includes/common_css.php";?>
</head>

<body>
<?php include "includes/navbar.php"; ?>
<form action="" method="post">
<?php $csrf_name=getCSRFname(); $csrf_token=getCSRFtoken($csrf_name);?> 
<input type="hidden" name="csrf_name" value="<?php echo $csrf_name; ?>">
<input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
    <div class="frm_div">
        <p>
        <label>Account No</label>
        <input type="text" name="accno"/>	
        </p>
        
        <p>
        <label>Amount</label>
        <input type="text" name="tamount"/>	
        </p>
        <p>
        <label>&nbsp;</label>
        <input type="submit" name="transfer" value="Transfer"/>	
        </p>
    </div>  
</form>  
</body>
</html>