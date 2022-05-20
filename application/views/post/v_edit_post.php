<h2 class="text-center my-4">Edit Post</h2>
<div class="row">
	<div class="col-md-6 mx-auto">
		<div class="card">
			<div class="card-body">
				<form action="<?= base_url() ?>post/validation_edit_post/<?= $post->idpost ?>" method="post">
					<div class="mb-3">
						<label for="title" class="form-label">Title</label>
						<input required type="text" name="title" id="title" class="form-control" placeholder="Input title" value="<?= $post->title ?>">
					</div>

					<div class="mb-3">
						<label for="content" class="form-label">Content</label>

						<textarea name="content" id="content" class="form-control"><?= $post->content ?></textarea>
					</div>

					<button type="submit" class="btn btn-warning">Edit Post</button>
				</form>
			</div>
		</div>
	</div>
</div>
