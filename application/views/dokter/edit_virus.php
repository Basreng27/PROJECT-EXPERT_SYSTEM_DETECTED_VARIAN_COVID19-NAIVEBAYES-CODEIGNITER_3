<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Virus</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php foreach ($data_virus as $data) { ?>
                                <form action="<?php echo base_url() ?>proses_edit_virus" method="POST">
                                    <div class="form-group">
                                        <h4>Kode Virus</h4>
                                        <input type="text" class="form-control input-rounded" name="kode_virus" value="<?php echo $data->kode_virus ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <h4>Nama Virus</h4>
                                        <input type="text" class="form-control input-rounded" name="nama_virus" value="<?php echo $data->nama_virus ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <h4>Solusi</h4>
                                        <input class="form-control" name="solusi" value="<?php echo $data->solusi ?>" required></input>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-rounded btn-primary" name="submit" value="submit">Simpan</button>
                                    </div>
                                <?php } ?>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>