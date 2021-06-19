<?php

$system_install = true;
$system_version = "1.0.0";

if($system_install == false){
	header ("location: ./");
}else{
	$painel_show = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="sortcut icon" href="<?php echo "app/system/v".$system_version."/images/icon-radius.png"; ?>" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo "app/system/v".$system_version."/css/style-install.css"; ?>">
</head>
<body>
    <?php 

        if($painel_show == true){
            include("app/system/v".$system_version."/admin-install.php");
        }

    ?>
</body>
</html>