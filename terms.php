<?php
    $system_version = "1.0.0";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="sortcut icon" href="<?php echo "app/system/v".$system_version."/images/icon-radius.png"; ?>" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo "app/system/v".$system_version."/css/style-terms.css"; ?>">
</head>
<body style="background: <?php echo $theme_color_body; ?>;">
    <?php 

        include("app/system/v".$system_version."/admin-terms.php"); 

    ?>
</body>
</html>