<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Kasus</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Terkena Varian</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_kasus as $data) { ?>
                                        <tr class="h6">
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data->nama ?></td>
                                            <td><?php echo $data->jenis_kelamin ?></td>
                                            <td><?php echo $data->kode_virus ?></td>
                                            <td><?php echo $data->umur ?></td>
                                            <td><?php echo $data->alamat ?></td>
                                            <td><?php echo $data->no_telepon ?></td>
                                            <td><?php echo $data->tanggal ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Terkena Varian</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>