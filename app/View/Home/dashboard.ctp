<div class="d-flex justify-content-center h-100">
	<div class="user_card">
		<div class="justify-content-center">
			<h2 id="selenium-header" data-username="<?PHP echo $this->Session->read('User.username'); ?>">Welcome, <?PHP echo $this->Session->read('User.username'); ?>!</h2>
			<br /><br />
			<p><a id="selenium-logout" href="<?PHP echo Router::url('/logout'); ?>" class="btn btn-danger">Logout</a></p>
		</div>
	</div>
</div>