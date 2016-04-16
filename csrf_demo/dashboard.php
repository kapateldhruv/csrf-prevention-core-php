<?php 
require_once("config.php");
require_once(SCRIPT."dashboard.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>
<?php include "includes/common_css.php";?>
</head>

<body>
	<?php include "includes/navbar.php"; ?>
    
    <div class="fl full_width">
    <h2>Welcome <?php echo $user_data->username; ?></h2>
    <p>session id is <?php echo session_id(); ?></p>
    </div>
</body>
</html>