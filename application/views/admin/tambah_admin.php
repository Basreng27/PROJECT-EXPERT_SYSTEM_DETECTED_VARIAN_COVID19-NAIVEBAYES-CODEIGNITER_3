<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah admin</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($terdaftar)) { ?>
                            <div class="alert alert-danger"><strong>Username</strong> telah terdaftar, silahkan cari <strong>Username</strong> baru.</div>
                        <?php } elseif (isset($berhasil)) { ?>
                            <div class="alert alert-success"><strong>Username</strong> telah berhasil didaftarkan.</div>
                        <?php } ?>
                        <div class="basic-form">
                            <form action="<?php echo base_url() ?>proses_tambah_admin" method="POST">
                                <div class="form-group">
                                    <h4>Nama</h4>
                                    <input type="text" class="form-control input-rounded" name="nama" placeholder="Masukan Nama" required>
                                </div>

                                <div class="form-group">
                                    <h4>Username</h4>
                                    <input type="text" class="form-control input-rounded" name="username" placeholder="Masukan Username" required>
                                </div>

                                <div class="form-group">
                                    <h4>Password</h4>
                                    <input type="password" class="form-control input-rounded" name="password" placeholder="Masukan Password" required>
                                </div>

                                <div class="form-group">
                                    <h4>Hak Akses</h4>
                                    <select class="form-control" name="hak">
                                        <option value="admin">Admin</option>
                                        <option value="dokter">Dokter</option>
                                    </select>
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