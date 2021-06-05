<?php
    $system_install = true;
    $system_logged = true;
    $system_version = "1.0.0";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

	<?php
        
        if($system_install == true){

        	if($system_logged == true){
               include("app/system/v".$system_version."/admin-painel.php");
        	}else{
        		//login
        	}
       
        }else{

        	//instalar

        }

	?>

</body>
</html>