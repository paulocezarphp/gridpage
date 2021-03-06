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

//$system_version = "1.0.0";
$GLOBALS['system_version'] = "1.0.0";

include("app/system/v".$system_version."/php/modules/style-color.php");
include("app/system/v".$system_version."/php/modules/start-class.php");
?>

<?php $System->system_admin_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <?php $System->system_admin_header(); ?>
	<title>Admin | </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="sortcut icon" href="<?php echo "app/system/v".$system_version."/images/icon-radius.png"; ?>" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo "app/system/v".$system_version."/css/style-admin-desktop.css"; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo "app/system/v".$system_version."/css/style-admin.css"; ?>" />
</head>
<body>

    <?php $System->system_admin_body_start(); ?>

    <?php 

        if($painel_show == true){
            include("app/system/v".$system_version."/admin-painel.php"); 
        }

    ?>

    <?php $System->system_admin_body_end(); ?>

</body>
</html>

<?php $System->system_admin_end(); ?>