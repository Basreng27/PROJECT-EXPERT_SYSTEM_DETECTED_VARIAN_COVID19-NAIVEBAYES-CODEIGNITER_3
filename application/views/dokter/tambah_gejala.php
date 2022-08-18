<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Gejala</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($terdaftar)) { ?>
                            <div class="alert alert-danger"><strong>Gejala</strong> telah terdaftar, silahkan masukan <strong>Gejala</strong> baru.</div>
                        <?php } elseif (isset($berhasil)) { ?>
                            <div class="alert alert-success"><strong>Gejala</strong> telah berhasil didaftarkan.</div>
                        <?php } ?>
                        <div class="basic-form">
                            <form action="<?php echo base_url() ?>proses_tambah_gejala" method="POST">
                                <div class="form-group">
                                    <h4>Kode Gejala</h4>
                                    <input type="text" class="form-control input-rounded" name="kode_gejala" placeholder="Masukan Kode Gejala" required>
                                </div>

                                <div class="form-group">
                                    <h4>Nama Gejala</h4>
                                    <input type="text" class="form-control input-rounded" name="nama_gejala" placeholder="Masukan Nama Gejala" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-rounded btn-primary" name="submit" value="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>