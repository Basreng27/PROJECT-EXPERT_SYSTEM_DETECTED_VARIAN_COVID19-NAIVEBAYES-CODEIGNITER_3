<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Virus</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($terdaftar)) { ?>
                            <div class="alert alert-danger"><strong>Virus</strong> telah terdaftar, silahkan masukan <strong>Virus</strong> baru.</div>
                        <?php } elseif (isset($berhasil)) { ?>
                            <div class="alert alert-success"><strong>Virus</strong> telah berhasil didaftarkan.</div>
                        <?php } ?>
                        <div class="basic-form">
                            <form action="<?php echo base_url() ?>proses_tambah_virus" method="POST">
                                <div class="form-group">
                                    <h4>Kode Virus</h4>
                                    <input type="text" class="form-control input-rounded" name="kode_virus" placeholder="Masukan Kode Virus" required>
                                </div>

                                <div class="form-group">
                                    <h4>Nama Virus</h4>
                                    <input type="text" class="form-control input-rounded" name="nama_virus" placeholder="Masukan Nama Virus" required>
                                </div>

                                <div class="form-group">
                                    <h4>Solusi</h4>
                                    <textarea class="form-control" name="solusi" placeholder="Masukan Solusi" required></textarea>
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