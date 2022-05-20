<!-- Page content wrapper-->
<div class="border-end bg-white" id="sidebar-wrapper">
	<div class="sidebar-heading border-bottom bg-light"><?= $this->session->name != '' ? $this->session->name : 'Blog' ?></div>
	<div class="list-group list-group-flush">
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url() ?>">Home</a>
		<?php
		if ($this->session->role == 'admin') {
		?>
			<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url() ?>account/author_manage">Author Management</a>
			<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url() ?>account/add">Add Account</a>
		<?php } ?>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url() ?>add_post">Add Post</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3 border-bottom" href="<?= base_url() ?>post/post_manage">Post Management</a>  
	</div>
</div>
<div id="page-content-wrapper">
