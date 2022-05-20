<h2 class="text-center my-4">Add Post</h2>
<div class="row">
	<div class="col-md-6 mx-auto">
		<div class="card">
			<div class="card-body">
				<form action="<?= base_url() ?>post/validation_add_post" method="post">
					<div class="mb-3">
						<label for="title" class="form-label">Title</label>
						<input required type="text" name="title" id="title" class="form-control" placeholder="Input title">
					</div>

					<div class="mb-3">
						<label for="content" class="form-label">Content</label>

						<textarea name="content" id="content" class="form-control" placeholder="Input post"></textarea>
					</div>

					<button type="submit" class="btn btn-info">Add Post</button>
				</form>
			</div>
		</div>
	</div>
</div>
