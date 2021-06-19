<div class="install">
	<form method="POST" action="">
		<div class="install-context">
			<img src="<?php echo "app/system/v".$system_version."/images/icon.png"; ?>" class="install-image-icon">
			<div class="install-title">GridPage Install</div>
			<div class="install-description">Complete all the fields correctly</div>
			
			<div class="install-block">

				<div>
					

					<div class="install-label">Database Name*</div>
					<input type="text" name="install" class="install-input" 
					autocomplete="off" placeholder="">

					<div class="install-label">Database UserName*</div>
					<input type="text" name="install" class="install-input" 
					autocomplete="off" placeholder="">

					<div class="install-label">Database Password*</div>
					<input type="password" name="install" class="install-input" 
					autocomplete="off" placeholder="">

					<div class="install-label">Database Host*</div>
					<input type="text" name="install" class="install-input" 
					autocomplete="off" placeholder="">

					<div class="install-label">Database Table Prefix*</div>
					<input type="text" name="text" class="install-input" 
					autocomplete="off" placeholder="gp_" value="">

					
				</div>

				<div>
                    <div class="install-label">Site Name*</div>
					<input type="text" name="install" class="install-input" 
					autocomplete="off" placeholder="">

					<div class="install-label">Admin Name*</div>
					<input type="text" name="install" class="install-input" 
					autocomplete="off" placeholder="">

					<div class="install-label">Admin Email*</div>
					<input type="text" name="install" class="install-input" 
					autocomplete="off" placeholder="">

					<div class="install-label">Admin Password*</div>
					<input type="password" name="install" class="install-input" 
					autocomplete="off" placeholder="">
                    
					<div class="install-info-group">
						<input type="checkbox" name="" checked="">
						<div class="install-remember">Visible to search engines</div>
					</div>
                    
					<div class="install-info-group">
						<input type="checkbox" name="">
						<div class="install-remember">I have read and accepted the terms and conditions of use of the system</div>
					</div>

				</div>

			</div>


			<button type="submit" class="installbutton">Install</button>

		</div>
	</form>
</div>