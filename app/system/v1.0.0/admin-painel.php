<div class="painel">
	
	<div class="painel-group">

		<div class="painel-left" <?php echo "style='background:".$theme_color_background."; color:".$theme_color_background_text.";'"; ?>>

			<?php 
			
			$View->menu_stack_init();

			$View->menu_stack_add("menu-a", 10, "Item menu A", "plus-w");
			$View->menu_stack_add("menu-b",44, "Item menu B", "plus-w");
			$View->menu_stack_add("menu-c",30, "Item menu C", "plus-w");
			$View->menu_stack_add("menu-d",20, "Item menu D", "plus-w");
             
            $View->sub_menu_stack_add("menu-a", 4, "(A) Sub menu item A");
            $View->sub_menu_stack_add("menu-a", 2, "(A) Sub menu item B");
            $View->sub_menu_stack_add("menu-a", 3, "(A) Sub menu item C");
            $View->sub_menu_stack_add("menu-a", 1, "(A) Sub menu item D");

            $View->sub_menu_stack_add("menu-b", 40, "(B) Sub menu item A");
            $View->sub_menu_stack_add("menu-b", 20, "(B) Sub menu item B");
            $View->sub_menu_stack_add("menu-b", 10, "(B) Sub menu item C");
            $View->sub_menu_stack_add("menu-b", 30, "(B) Sub menu item D");
            $View->sub_menu_stack_add("menu-b", 5, "(B) Sub menu item E");
            $View->sub_menu_stack_add("menu-b", 2, "(B) Sub menu item F");
            
            $View->sub_menu_stack_add("menu-c", 40, "(C) Sub menu item A");
            $View->sub_menu_stack_add("menu-c", 20, "(C) Sub menu item B");
            $View->sub_menu_stack_add("menu-c", 10, "(C) Sub menu item C");
            $View->sub_menu_stack_add("menu-c", 30, "(C) Sub menu item D");
	            
            $View->sub_menu_stack_add("menu-d", 40, "(D) Sub menu item A");
            $View->sub_menu_stack_add("menu-d", 20, "(D) Sub menu item B");
            $View->sub_menu_stack_add("menu-d", 10, "(D) Sub menu item C");
            $View->sub_menu_stack_add("menu-d", 30, "(D) Sub menu item D");

			$View->menu_stack_show();

			?>

		</div>
		<div class="painel-right">
			<div class="painel-menu" <?php echo " style='background:".$theme_color_background.";' "; ?> >
				<div class="painel-menu-item" <?php echo " style='color:".$theme_color_background_text.";' "; ?> >
					<img src="<?php echo "app/system/v".$system_version."/images/icon-radius.png"; ?>" class="painel-item-icon">
					<div>
						<div class="painel-item-text">Welcome - Admin</div> 
					</div>
				</div>
			</div>
			<div class="painel-container">

				<h1>Title Page</h1>

				<?php $View->box("Be very welcome", "information"); ?>

				<p>
					Lorem ipsum in magna rhoncus volutpat dolor, facilisis habitasse porta leo volutpat etiam bibendum, viverra ad a tempor ultrices. 
					imperdiet massa consectetur adipiscing lorem curabitur tortor sollicitudin, quisque pellentesque ad phasellus sociosqu dui rutrum, curabitur dapibus ornare enim elit est dictumst, consequat auctor facilisis amet erat proin. 
					quis scelerisque vulputate iaculis dui egestas litora curabitur faucibus nullam pharetra, tincidunt mi cras feugiat augue donec mattis netus vitae sed, libero luctus amet sem ornare cras ultrices pulvinar morbi. 
					quis sit sagittis purus vitae vehicula nec habitant sapien imperdiet et eros dapibus risus, metus faucibus potenti ligula congue egestas consequat porttitor fames ornare donec felis. 
				</p>
				
			</div>
		</div>	

	</div>	
</div>	
