<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($tidak_terdaftar)) { ?>
                            <div class="alert alert-danger"><strong>Username atau Password!</strong> Tidak terdaftar atau salah.</div>
                        <?php } ?>
                        <div class="basic-form">
                            <form action="<?php echo base_url() ?>proses_login" method="POST">
                                <div class="form-group">
                                    <h4>Username</h4>
                                    <input type="text" class="form-control input-rounded" name="username" placeholder="Masukan Username" required>
                                </div>

                                <div class="form-group">
                                    <h4>Password</h4>
                                    <input type="password" class="form-control input-rounded" name="password" placeholder="Masukan Password" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-rounded btn-primary" name="submit" value="submit">Proses</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>