<div class="row mt-5">
	<div class="col-md-4 mx-auto">
		<div class="card">
			<div class="card-header">
				<h5 class="text-center">Login</h5>
			</div>
			<div class="card-body">
				<form action="<?= base_url() ?>account/validation_login" method="post">
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input required type="text" name="username" id="username" class="form-control" placeholder="Input username">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input required type="password" name="password" id="password" class="form-control" placeholder="Input password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
