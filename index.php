<?php

$system_install = true;
$system_version = "1.0.0";
$system_option_select = "themes"; //grids, themes
$system_name_select = "basic-theme";

if($system_install == true){
	include("app/".$system_option_select."/".$system_name_select."/index.php");
}else{
    header ("location: install.php");
}

?>