        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Admin</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <?php foreach ($data_username as $data) { ?>
                                        <form action="<?php echo base_url() ?>proses_edit_admin" method="POST">
                                            <div class="form-group">
                                                <h4>Nama</h4>
                                                <input type="text" class="form-control input-rounded" name="nama" value="<?php echo $data->nama ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <h4>Username</h4>
                                                <input type="text" class="form-control input-rounded" name="username" value="<?php echo $data->username ?>" readonly>
                                            </div>

                                            <div class="form-group">
                                                <h4>Password Baru</h4>
                                                <input type="password" class="form-control input-rounded" name="password" required>
                                            </div>

                                            <div class="form-group">
                                                <h4>Hak Akses</h4>
                                                <select class="form-control" name="hak">
                                                    <option value="<?php echo $data->hak ?>"><?php echo $data->hak ?></option>
                                                    <option value="admin">Admin</option>
                                                    <option value="dokter">Dokter</option>
                                                </select>
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