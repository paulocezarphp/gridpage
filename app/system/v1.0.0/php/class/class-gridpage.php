<?php

class GPgridpage{
    
    public function gridpage_init(){

         include("class-system.php");
         include("class-cryptography.php");
         include("class-database.php");
         include("class-date.php");
         include("class-files.php");
         include("class-grids.php");
         include("class-log.php");
         include("class-modules.php");
         include("class-safety.php");
         include("class-themes.php");
         include("class-translator.php");
         include("class-utilities.php");
         include("class-widgets.php");
         include("class-validate.php");

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

	}

}

?>