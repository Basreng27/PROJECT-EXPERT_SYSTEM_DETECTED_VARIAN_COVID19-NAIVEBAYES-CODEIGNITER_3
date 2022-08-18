<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Gejala</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php foreach ($data_gejala as $data) { ?>
                                <form action="<?php echo base_url() ?>proses_edit_gejala" method="POST">
                                    <div class="form-group">
                                        <h4>Kode Gejala</h4>
                                        <input type="text" class="form-control input-rounded" name="kode_gejala" value="<?php echo $data->kode_gejala ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <h4>Nama Gejala</h4>
                                        <input type="text" class="form-control input-rounded" name="nama_gejala" value="<?php echo $data->nama_gejala ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-rounded btn-primary" name="submit" value="submit">Simpan</button>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>