		<!-- Page content-->
		<div class="container-fluid">
			<?php
			if (!empty($this->session->flashdata('error'))) {
			?>
				<div class="alert alert-danger">
					<?= $this->session->flashdata('error'); ?>
				</div>
			<?php
				$this->session->sess_destroy();
			}
			if (!empty($this->session->flashdata('success'))) {
			?>
				<div class="alert alert-primary">
					<?= $this->session->flashdata('success'); ?>
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
