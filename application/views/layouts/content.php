		<!-- Page content-->
		<div class="container-fluid">
			<?php
			if (!empty($this->session->flashdata('error'))) {
			?>
				<div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('error'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php
			}
			if (!empty($this->session->flashdata('success'))) {
				?>
				<div class="alert alert-primary mt-2 alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('success'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
			}
			if (isset($content)) {
				$this->load->view($content);
			}
			?>
		</div>
		</div>
		</div>
