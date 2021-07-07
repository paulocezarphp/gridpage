<?php

class GPview{

	public function box($body_context, $type){

		if($type == "problem"){

			echo '
			<div class="box color-border-danger" style="background:'.$GLOBALS['theme_color_box'].';" >
			<div class="box-title color-danger">Problem</div>
			<div class="box-body">'.$body_context.'</div>
			</div>
			'; 

		}elseif($type == "information"){

			echo '
			<div class="box color-border-info" style="background:'.$GLOBALS['theme_color_box'].';" >
			<div class="box-title color-info">Information</div>
			<div class="box-body">'.$body_context.'</div>
			</div>
			'; 

		}elseif($type == "completed"){

			echo '
			<div class="box color-border-success" style="background:'.$GLOBALS['theme_color_box'].';" >
			<div class="box-title color-success">Completed</div>
			<div class="box-body">'.$body_context.'</div>
			</div>
			'; 

		}elseif($type == "warning"){

			echo '
			<div class="box color-border-warning" style="background:'.$GLOBALS['theme_color_box'].';" >
			<div class="box-title color-warning">Warning</div>
			<div class="box-body">'.$body_context.'</div>
			</div>
			'; 

		}else{

		}  

	}

	public function menu_item($icon_name, $title_menu_item, $index_page_name){

		echo '
		<div class="painel-item-menu">
		<div>
		<img src="app/system/v'.$GLOBALS['system_version'].'/icons/'.$icon_name.'.svg" class="painel-item-menu-icon">
		</div>
		<div>
		<div class="painel-item-menu-text">'.$title_menu_item.'</div>
		</div>
		</div>
		';

	}

	public function sub_menu_item($title_submenu_item, $page_name){

		echo '
		<div class="painel-item-submenu">								
		<div class="painel-item-submenu-text">'.$title_submenu_item.'</div>
		</div>	
		';

	}

	public function menu_stack_init(){

		$GLOBALS['menu_stack_indice'] = array();
		$GLOBALS['menu_stack_objects'] = array();
		$GLOBALS['menu_stack_icon'] = array();

	}

	public function menu_stack_add($indice, $objects, $icon){

		array_push($GLOBALS['menu_stack_indice'], $indice);
		array_push($GLOBALS['menu_stack_objects'], $objects);
		array_push($GLOBALS['menu_stack_icon'], $icon);

	}

	public function menu_stack_show($value, $objects, $icon){

		array_multisort($value, $objects, $icon);
		$count = 0;
		$total = count($value);

		while ($count < $total) { 

			$this->menu_item($icon[$count], $objects[$count], "");

			$count++;

		}

	}

}

?>