<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sistem Deteksi Covid-19</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <!-- <form action="<?php echo base_url() ?>proses_tambah_kasus" method="POST"> -->
                            <form onSubmit="return validate()" action="<?php echo base_url() ?>proses_tambah_kasus" method="POST">
                                <div class="form-group">
                                    <h4>Nama</h4>
                                    <input type="text" class="form-control input-rounded" name="nama" placeholder="Masukan Nama" required>
                                </div>

                                <div class="form-group">
                                    <h4>Jenis Kelamin</h4>
                                    <div class="radio">
                                        <h6>
                                            <input type="radio" name="jenis_kelamin" value="Laki Laki">Laki Laki
                                        </h6>
                                    </div>
                                    <div class="radio">
                                        <h6>
                                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                                        </h6>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h4>Umur</h4>
                                    <input type="number" class="form-control input-rounded" name="umur" placeholder="Masukan Umur" required>
                                </div>

                                <div class="form-group">
                                    <h4>Alamat</h4>
                                    <textarea class="form-control" name="alamat" placeholder="Masukan Alamat" required></textarea>
                                </div>

                                <div class="form-group">
                                    <h4>No Telepon</h4>
                                    <input type="number" class="form-control input-rounded" name="no_telepon" placeholder="Masukan No Telepon" required>
                                </div>

                                <div class="form-group">
                                    <h4>Tanggal</h4>
                                    <input type="text" class="form-control input-rounded" name="tanggal" value="<?php echo date("Y-m-d"); ?>" readonly>
                                </div>

                                <h4 class="card-title">Gejala</h4>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table style="min-width: 845px" border="1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Gejala</th>
                                                    <th>Nama Gejala</th>
                                                    <th>Pilih</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($gejala as $data) { ?>
                                                    <tr class="h6">
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $data->kode_gejala ?></td>
                                                        <td><?php echo $data->nama_gejala ?></td>
                                                        <td> <input type="checkbox" name="kode_gejala[]" value="<?php echo $data->kode_gejala ?>">
                                                        </td>
                                                        <!-- id="<?= $data->nama_gejala; ?>" -->
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
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

<script>
    function validate() {
        var chks = document.getElementsByName('kode_gejala[]');
        var hasChecked = false;
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) {
                hasChecked = true;
                break;
            }
        }

        if (hasChecked == false) {
            alert("Tolong Pilih Gejala");
            return false;
        } else {}
    }
</script>