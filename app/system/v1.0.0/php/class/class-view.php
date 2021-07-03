<?php

class GPview{
    
    public function box($body_context, $type, $box_background){
        
        if($type == "problem"){

            echo '
            <div class="box color-border-danger" style="background:'.$box_background.';" >
                <div class="box-title color-danger">Problem</div>
                <div class="box-body">'.$body_context.'</div>
            </div>
            '; 

        }elseif($type == "information"){

            echo '
            <div class="box color-border-info" style="background:'.$box_background.';" >
                <div class="box-title color-info">Information</div>
                <div class="box-body">'.$body_context.'</div>
            </div>
            '; 

        }elseif($type == "completed"){

        	echo '
            <div class="box color-border-success" style="background:'.$box_background.';" >
                <div class="box-title color-success">Completed</div>
                <div class="box-body">'.$body_context.'</div>
            </div>
            '; 

        }elseif($type == "warning"){

        	echo '
            <div class="box color-border-warning" style="background:'.$box_background.';" >
                <div class="box-title color-warning">Warning</div>
                <div class="box-body">'.$body_context.'</div>
            </div>
            '; 

        }else{

        }  

    }

    public function menu_item(){

    }

    public function sub_menu_item(){
    	
    }

}

?>