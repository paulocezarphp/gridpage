<?php

include("app/system/v".$system_version."/php/class/class-system.php");
include("app/system/v".$system_version."/php/class/class-cryptography.php");
include("app/system/v".$system_version."/php/class/class-database.php");
include("app/system/v".$system_version."/php/class/class-date.php");
include("app/system/v".$system_version."/php/class/class-files.php");
include("app/system/v".$system_version."/php/class/class-grids.php");
include("app/system/v".$system_version."/php/class/class-log.php");
include("app/system/v".$system_version."/php/class/class-modules.php");
include("app/system/v".$system_version."/php/class/class-safety.php");
include("app/system/v".$system_version."/php/class/class-themes.php");
include("app/system/v".$system_version."/php/class/class-translator.php");
include("app/system/v".$system_version."/php/class/class-utilities.php");
include("app/system/v".$system_version."/php/class/class-widgets.php");
include("app/system/v".$system_version."/php/class/class-validate.php");
include("app/system/v".$system_version."/php/class/class-view.php");


$System = new GPsystem();
$Cryptography = new GPcryptography();
$Database = new GPdatabase();
$Date = new GPdate();
$Files = new GPfile();
$Grids = new GPgrids();
$Log = new GPlog();
$Modules = new GPmodules();
$Safety = new GPsafety();
$Themes = new GPthemes();
$Translator = new GPtranslate();
$Utilities = new GPutilities();
$Widgets = new GPwidgets();
$Validate = new GPvalidate();
$View = new GPview();

?>