<?php

class GPlog{
	
	public function add_register($type){

		$input_log = $type;

		$url_file_log = "./gridlog.php";

		if(file_exists($url_file_log)){
            
			$file_log = fopen($url_file_log, "a+");
            
		}

		switch ($input_log){

			case 'ok_system_install':
			    $date = date('Y/m/d H:i:s');
			    $mensage = "[".$date."] "."Install ok \n";
        		fwrite($file_log, $mensage);
			break;
			case 'ok_system_backup':
        		# code...
			break;
			case 'ok_system_reboot':
        		# code...
			break;
			case 'error_login_access':
        		# code...
			break;
			case 'ok_login_access':
        		# code...
			break;
			case 'ok_module_install':
        		# code...
			break;
			case 'erro_module_install':
        		# code...
			break;
			case 'ok_module_activate':
        		# code...
			break;
			case 'erro_module_activate':
        		# code...
			break;
			case 'ok_module_disable':
        		# code...
			break;	
			case 'error_module_disable':
        		# code...
			break;
			case 'ok_module_delete':
        		# code...
			break;	
			case 'error_module_delete':
        		# code...
			break;
			case 'ok_theme_activate':
        		# code...
			break;
			case 'error_theme_activate':
        		# code...
			break;
			case 'ok_theme_import':
        		# code...
			break;
			case 'error_theme_import':
        		# code...
			break;
			case 'ok_theme_delete':
        		# code...
			break;
			case 'error_theme_delete':
        		# code...
			break;
			case 'ok_grid_create':
        		# code...
			break;
			case 'error_grid_create':
        		# code...
			break;
			case 'ok_grid_edit':
        		# code...
			break;
			case 'error_grid_edit':
        		# code...
			break;
			case 'ok_grid_import':
        		# code...
			break;
			case 'error_grid_import':
        		# code...
			break;
			case 'ok_grid_delete':
        		# code...
			break;
			case 'error_grid_delete':
        		# code...
			break;
			default:
        		# code...
			break;

		}
        
        if(file_exists($url_file_log)){

		    fclose($file_log);
        
        }

	}

	public function list_register($number_page){
		return true;
	}

	public function clean_register(){
		return true;
	} 

}

?>