<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<h5 class="card-title text-center">Login RSUD JOGJA</h5>
					<form action="<?= base_url('login') ?>" method="post" enctype="multipart/form-data">
						<div class="form-label-group">
							<input type="username" id="username" class="form-control" placeholder="Username" name="username">
							<label for="username">Username</label>
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class="form-label-group">
							<input type="password" id="password" class="form-control" placeholder="password" name="password">
							<label for="password">Password</label>
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Login</button>
						<hr class="my-4">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>