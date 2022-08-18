<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Admin</h4>
                        <a href="<?php echo base_url() ?>tambah_admin" class="btn btn-rounded btn-info">
                            <sapn class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Hak</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($akun as $data) { ?>
                                        <tr class="h6">
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data->nama ?></td>
                                            <td><?php echo $data->username ?></td>
                                            <td><?php echo $data->hak ?></td>
                                            <td>
                                                <a href="<?php echo base_url('edit_admin/' . $data->username) ?>" class="btn btn-round btn-secondary">Edit<sapn class="btn-icon-right"><i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="<?php echo base_url('delete_admin/' . $data->username) ?>" class="btn btn-round btn-danger">Delete<span class="btn-icon-right"><i class="fa fa-close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Hak</th>
                                        <th>Option</th>
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