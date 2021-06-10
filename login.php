<?php

$system_install = true;
$system_logged = false;
$system_version = "1.0.0";
    
if($system_install == true){
    if($system_logged == true){
        header ("location: admin");               
    }else{
    	$painel_show = true;
    }     
}else{
    header ("location: install");
}

include("app/system/v".$system_version."/php/modules/style-color.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="sortcut icon" href="<?php echo "app/system/v".$system_version."/images/icon-radius.png"; ?>" type="image/x-icon" />
</head>
<body>
    <?php 

        if($painel_show == true){
            include("app/system/v".$system_version."/admin-login.php"); 
        }

    ?>
</body>
</html>