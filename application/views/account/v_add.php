<h2 class="text-center my-4">Add Account</h2>
<div class="row m-0">
	<div class="col-md-4 mx-auto">
		<div class="card">
			<div class="card-body">
				<?= validation_errors() ?>
				<form action="<?= base_url() ?>account/validation_add" method="post">
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input required type="text" name="username" id="username" class="form-control" placeholder="Input username">
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input required type="text" name="name" id="name" class="form-control" placeholder="Input name">
					</div>
					<div class="mb-3">
						<label for="role" class="form-label">Role</label>
						<select name="role" id="role" class="form-select" required>
							<option value="">- Choose Role -</option>
							<option value="admin">Admin</option>
							<option value="author">Author</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input required type="password" name="password" id="password" class="form-control" placeholder="Password min 4 character">
					</div>
					<div class="mb-3">
						<label for="re-password" class="form-label">Re-Password</label>
						<input required type="password" name="repassword" id="re-password" class="form-control" placeholder="Repassword must be same as password">
					</div>
					<button class="btn btn-success" type="submit">Add</button>
				</form>
			</div>
		</div>
	</div>
</div>
