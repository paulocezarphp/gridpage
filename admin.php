<?php

$system_install = true;
$system_logged = true;
    
if($system_install == true){
    if($system_logged == true){
        $painel_show = true;              
    }else{
        header ("location: login");
    }      
}else{
    header ("location: install");
}

$system_version = "1.0.0";

include("app/system/v".$system_version."/php/modules/style-color.php");
include("app/system/v".$system_version."/php/modules/start-class.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="sortcut icon" href="<?php echo "app/system/v".$system_version."/images/icon-radius.png"; ?>" type="image/x-icon" />
</head>
<body style="background: <?php echo $theme_color_body; ?>;">
    <?php 

        if($painel_show == true){
            include("app/system/v".$system_version."/admin-painel.php"); 
        }

        $Log->add_register("ok_system_install");

    ?>
</body>
</html>