<div id="register-form" class="widecolumn">
	<?php if ( $attributes['show_title'] ) : ?>
		<h3><?php _e( 'Register', 'personalize-login' ); ?></h3>
	<?php endif; ?>

	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
		<?php foreach ( $attributes['errors'] as $error ) : ?>
			<p class='login-error'>
				<?php echo $error; ?>
			</p>
		<?php endforeach; ?>
	<?php endif; ?>

	<form id="signupform" action="<?php echo wp_registration_url(); ?>" method="post">
	 
		
			<div class="row linha-tipo-register">
				<div class="col-md-6">
					<input type="radio" name="tipo_role" id='role-jovem-aprendiz' value="jovem_aprendiz" checked>
					<label for='role-jovem-aprendiz'>SOU UM JOVEM APRENDIZ</label>
				</div>
				<div class="col-md-6">
					<input type="radio" name="tipo_role" id='role-empresas' value="empresas">
					<label for='role-empresas'>SOU UMA EMPRESA</label>
				</div>
			</div>
				<p></p>
			<p class="form-row">
				<label for="email"><?php _e( 'Email', 'personalize-login' ); ?> <strong>*</strong></label>
				<input type="text" name="email" id="email">
			</p>
			<p class="form-row">
				<label for="first_name"><?php _e( 'First name', 'personalize-login' ); ?></label>
				<input type="text" name="first_name" id="first-name">
			</p>

			<p class="form-row">
				<label for="last_name"><?php _e( 'Last name', 'personalize-login' ); ?></label>
				<input type="text" name="last_name" id="last-name">
			</p>
		
			<p class="form-row">
				<?php _e( 'Note: Your password will be generated automatically and emailed to the address you specify above.', 'personalize-login' ); ?>
			</p>

			<?php if ( $attributes['recaptcha_site_key'] ) : ?>
				<div class="recaptcha-container">
					<div class="g-recaptcha" data-sitekey="<?php echo $attributes['recaptcha_site_key']; ?>"></div>
				</div>
			<?php endif; ?>
		<p></p>	 
		<p class="signup-submit">
			<input type="submit" name="submit" class="register-button"
			       value="<?php _e( 'Register', 'personalize-login' ); ?>"/>
		</p>
 

	</form>
</div>
<script>
	jQuery(".linha-tipo-register input:radio").live("click",function(){
		if(jQuery(this).prop("checked")){		
			jQuery(".linha-tipo-register  .col-md-6").removeClass("linha-tipo-register-selected ");
			jQuery(this).closest("div").addClass("linha-tipo-register-selected ");
		}	
	});
</script>