<div class="d-flex justify-content-center h-100">
	<div class="user_card">
		<div class="d-flex justify-content-center">
			<div class="brand_logo_container">
				<img src="<?PHP echo Router::url('/img/abs-logo.png') ?>" class="brand_logo" alt="Logo">
			</div>
		</div>
		<div class="d-flex justify-content-center form_container">
			<?PHP echo $this->Form->create('User', ['method'=>'POST']); ?>
			<?php echo $this->Session->flash(); ?>
				<div class="input-group mb-3">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<?PHP echo $this->Form->input('username', ['class'=>'form-control input_user','placeholder'=>'Username','label'=>false,'div'=>false]); ?>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
					<?PHP echo $this->Form->input('password', ['class'=>'form-control input_pass','placeholder'=>'Password','label'=>false,'div'=>false]); ?>
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="submit" id="selenium-login" name="button" class="btn login_btn">Login</button>
				</div>
			<?PHP echo $this->Form->end(null); ?>
		</div>
	</div>
</div>