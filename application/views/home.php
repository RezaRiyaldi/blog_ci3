<h2 class="text-center my-4">Posts</h2>
<a href="<?= base_url() ?>add_post" class="btn btn-info">Add Post</a>

<div class="row mt-3">
	<?php
	foreach ($posts as $post) {
	?>
		<div class="col-md-6 mb-3">
			<div class="card">
				<div class="card-header">
					<h5 class="text-center mb-0"><a href="<?= base_url() ?><?= $post->idpost ?>/post" class="text-decoration-none text-primary"><?= $post->title ?></a></h5>
				</div>
				<div class="card-body">
					<p><?= substr($post->content, 0, 20) ?><a href="<?= base_url() ?><?= $post->idpost ?>/post">..learn more</a></p>
				</div>
				<div class="card-footer">
					<p class="text-muted mb-0"><?= $post->date ?></p>
					<p class="mb-0">By <?= $post->username ?></p>
				</div>
			</div>
		</div>
	<?php
	}
	?>
</div>
