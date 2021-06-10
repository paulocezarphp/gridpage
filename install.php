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
	<title>GridPage Install</title>
</head>
<body>
    <?php 

        if($painel_show == true){
            include("app/system/v".$system_version."/admin-install.php");
        }

    ?>
</body>
</html>