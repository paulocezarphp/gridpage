<div class="login">
	<form method="POST" action="">
		<div class="login-context">
			<img src="<?php echo "app/system/v".$system_version."/images/icon.png"; ?>" class="login-image-icon">
			<div class="login-title">GridPage</div>
			<div class="login-description">Access your account</div>
			<div class="login-label">Login</div>
			<input type="text" name="login" class="login-input" 
			autocomplete="off" placeholder="Enter your login">
			<div class="login-label">Password</div>
			<input type="password" name="password" class="login-input" 
			autocomplete="off" placeholder="Type your password">

			<div class="login-info-group">
				<input type="checkbox" name="">
				<div class="login-remember">To remember</div>
			</div>

			<button type="submit" class="loginbutton">Log In</button>

		</div>
	</form>
</div>