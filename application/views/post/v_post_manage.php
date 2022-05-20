<h2 class="text-center my-4">Post Management</h2>
<table class="table table-bordered">
	<tr class="text-center">
		<th>No</th>
		<th>Title</th>
		<th>Content</th>
		<th>Action</th>
	</tr>
	<?php
	$no = 1;
	foreach ($posts as $post) {
	?>
		<tr>
			<td class="text-center"><?= $no++ ?></td>
			<td><?= $post->title ?></td>
			<td><?= substr($post->content, 0, 30) ?></td>
			<td class="text-center">
				<a href="<?= base_url($post->idpost)  ?>/post/edit" class="btn btn-warning"" class="btn btn-warning">Edit</a>
				<a href="<?= base_url($post->idpost)  ?>/post/delete" class="btn btn-danger" onclick="return confirm('Are you sure want delete post <?=$post->title?> ?')">Delete</a>
			</td>
		</tr>
	<?php
	}
	?>
</table>
