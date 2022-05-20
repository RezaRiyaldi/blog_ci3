<h2 class="text-center my-4">Detail Post</h2>
<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="card">
			<div class="card-header text-center">
				<?= $title ?>
			</div>
			<div class="card-body">
				<p><?= $post->content ?></p>
			</div>
			<div class="card-footer">
				<p class="m-0 text-muted"><?= $post->date ?></p>
				<p class="m-0"><?= $post->username ?></p>
			</div>
		</div>
	</div>
</div>
