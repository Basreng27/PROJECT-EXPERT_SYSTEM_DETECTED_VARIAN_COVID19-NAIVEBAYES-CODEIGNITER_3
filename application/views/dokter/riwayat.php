<div class="content-body">
	<div class="container-fluid">

		<div class="row">
			<div class="col-xl-6 col-xxl-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Data Riwayat Delete Virus</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Virus</th>
										<th>Nama Virus</th>
										<th>Solusi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($riwayat as $data) { ?>
										<tr class="h6">
											<td><?php echo $no++ ?></td>
											<td><?php echo $data->kode_virus ?></td>
											<td><?php echo $data->nama_virus ?></td>
											<td><?php echo $data->solusi ?></td>
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
