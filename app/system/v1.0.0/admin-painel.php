<div class="painel">
	
	<div class="painel-group">

		<div class="painel-left" <?php echo "style='background:".$theme_color_background."; color:".$theme_color_background_text.";'"; ?>>

			<?php 
			
			$View->menu_stack_init();
			$View->menu_stack_add(10, "Item menu A", "plus-w");
			$View->menu_stack_add(30, "Item menu B", "plus-w");
			$View->menu_stack_add(30, "Item menu C", "plus-w");
			$View->menu_stack_add(20, "Item menu D", "plus-w");
			$View->menu_stack_show($menu_stack_indice, $menu_stack_objects, $menu_stack_icon);

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
