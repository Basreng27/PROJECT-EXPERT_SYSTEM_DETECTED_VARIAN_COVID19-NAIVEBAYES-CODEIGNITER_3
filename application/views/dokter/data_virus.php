<div class="content-body">
	<div class="container-fluid">

		<div class="row">
			<div class="col-xl-6 col-xxl-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Data Virus</h4>
						<a href="<?php echo base_url() ?>tambah_virus" class="btn btn-rounded btn-info">
							<sapn class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
						</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Virus</th>
										<th>Nama Virus</th>
										<th>Bobot</th>
										<th></th>
										<th>Solusi</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($data_virus as $data) { ?>
										<tr class="h6">
											<td><?php echo $no++ ?></td>
											<td><?php echo $data->kode_virus ?></td>
											<td><?php echo $data->nama_virus ?></td>
											<?php $kd_v = $this->M_admin->get_kd_virus($data->kode_virus)->num_rows(); ?>
											<td><?php echo $kd_v ?></td>
											<td></td>
											<td><?php echo $data->solusi ?></td>
											<td>
												<a href="<?php echo base_url('edit_virus/' . $data->kode_virus) ?>" class="btn btn-round btn-secondary">Edit<sapn class="btn-icon-right"><i class="fa fa-pencil"></i>
												</a>
												<a href="<?php echo base_url('delete_virus/' . $data->kode_virus) ?>" class="btn btn-round btn-danger">Delete<span class="btn-icon-right"><i class="fa fa-close"></i>
												</a>
												<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#K<?= $data->kode_virus ?>">Delete <i class="fa fa-close"></i></button> -->
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
foreach ($data_virus as $adat) { ?>
	<div class="modal fade" id="K<?= $adat->kode_virus ?>">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Hapus Virus</h5>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
					</button>
				</div>
				<div class="modal-body">Apa kamu yakin Menghapus virus dengan kode <?= $adat->kode_virus ?> ?</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
					<button type="button" class="btn btn-primary">Ya</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
