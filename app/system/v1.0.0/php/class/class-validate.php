<?php

class GPvalidate{
	
	public function email_user($email){

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return "true";
		}else{
			return "false";
		}

	}

	public function name_user($text){

		if(strlen($text) >= 3 && strlen($text) <= 50 && $text != null){
			return "true";
		}else{
			return "false";
		}

	}

	public function nickname_user($text){

		if(strlen($text) >= 3 && strlen($text) <= 40 && $text != null){
			return "true";
		}else{
			return "false";
		}

	}

	public function password_user($text){

		if(strlen($text) >= 6 && strlen($text) <= 50 && $text != null){
			return "true";
		}else{
			return "false";
		}

	}

	public function validate_version($version){

		$version_convert = str_split($version);
		$num = 0;
		$version_limit = 0;
		$numeric_validate = 1;

		foreach($version_convert as $index_char){

			if($index_char != '0' && $index_char != '1' && $index_char != '2' && $index_char != '3' && $index_char != '4' && $index_char != '5' && $index_char != '6' && $index_char != '7' && $index_char != '8' && $index_char != '9' && $index_char != '.'){
				
				$num++;           

			}else{

				if($numeric_validate % 2 == 0){

					if($index_char != '.'){

						$num++;
						
					}

				}

			}

			$numeric_validate++;

		}

		if(substr($version, -1) == '.' ){

			$num++;

		}

		if($num > 0){

			return "false";

		}else{

			return "true";

		}

	}

	public function name_database($text){

	}

	public function host_database($text){

	}

	public function root_database($text){

	}

	public function password_database($text){

	}

}

?>