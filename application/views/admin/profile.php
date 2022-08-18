<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit User</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php
                            foreach ($username as $data) { ?>
                                <form action="<?php echo base_url() ?>proses_edit_profile" method="POST">
                                    <div class="form-group">
                                        <h4>Nama</h4>
                                        <input type="text" class="form-control input-rounded" name="nama" value="<?= $data->nama ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <h4>Username</h4>
                                        <input type="text" class="form-control input-rounded" name="username" value="<?= $data->username ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <h4>Password Baru</h4>
                                        <input type="password" class="form-control input-rounded" name="password" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-rounded btn-primary" name="submit" value="submit">Simpan</button>
                                    </div>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>