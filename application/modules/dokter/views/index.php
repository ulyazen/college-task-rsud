<div class="row row-card-no-pd">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-head-row card-tools-still-right">
					<h4 class="card-title">Data Dokter</h4>
					<div class="m-3 font-weight-bold text-primary"><button type="button" class="btn btn-success" id="createBtn" name="createBtn" class="btn btn-info btn-md btn createBtn mb-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> Tambah Data Dokter </button> </div>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($dokter as $admin) : ?>
									<tr>
										<td> <?php echo $no++; ?> </td>
										<td> <?= $admin['nama']; ?> </td>
										<td>
											<?php if ($admin['jk'] == 1) {
												echo 'Laki-Laki';
											} else if ($admin['jk'] == 0) {
												echo 'Perempuan';
											}  ?>
										</td>
										<td> <?= $admin['alamat']; ?> </td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Entri Data Dokter</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('home/createAct') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class=" form-group">
						<label for="nama">Nama Dokter</label>
						<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan nama dokter.">
					</div>
					<div class="form-group">
						<label for="jk">Jenis Kelamin</label>
						<select class="form-control" id="jk" name="jk">
							<option value="none" selected disabled hidden>
								Pilih Jenis Kelamin.
							</option>
							<option value="1">Laki-Laki</option>
							<option value="0">Perempuan</option>
						</select>
					</div>
					<div class=" form-group">
						<label for="nama">Alamat</label>
						<input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan alamat.">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" value="upload">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>