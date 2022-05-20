<!-- Top navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
	<div class="container-fluid">
		<button class="btn btn-primary" id="sidebarToggle">Menu</button>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto me-5 mt-2 mt-lg-0">
				<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
				<?php
				if ($this->session->userdata('username')) {
				?>
					<li class="nav-item">
						<a href="<?= base_url() ?>logout" class="nav-link">Logout</a>
					</li>
				<?php } else { ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>login" class="nav-link">Login</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
