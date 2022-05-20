<h2 class="text-center my-4">Author Management</h2>
<table class="table table-bordered table-hover">
	<tr class="text-center">
		<th>No</th>
		<th>Username</th>
		<th>Name</th>
		<th>Action</th>
	</tr>
	<?php
	$no = 1;
	// var_dump($authors); die();
	foreach ($authors as $author) {
	?>
		<tr>
			<td class="text-center"><?= $no++ ?></td>
			<td><?= $author->username ?></td>
			<td><?= $author->name ?></td>
			<td class="text-center">
				<a href="<?= base_url($author->username) ?>/author/edit" class="btn btn-warning">Edit</a>
				<a href="<?= base_url($author->username) ?>/author/delete" onclick="return confirm('Are you sure want delete <?= $author->name ?> ?')" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php
	}
	?>
</table>
