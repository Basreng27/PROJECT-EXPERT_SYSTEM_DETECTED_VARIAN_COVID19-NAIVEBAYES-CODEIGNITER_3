<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <!-- <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Hasil perhitungan dengan metode naive bayes</div>
                        </div>
                    </div>
                    <hr> -->
                    <div class="col-xl-6 col-xxl-12">
                        <?php foreach ($hsl as $data) { ?>
                            <div>
                                <h3>Kesimpulan Pakar</h3>
                                <br>
                                <br>
                                <h5>Biodata Pasien</h5>
                                <h6>Nama : <?php echo $data->nama; ?></h6>
                                <h6>Jenis Kelamin : <?php echo $data->jenis_kelamin; ?></h6>
                                <h6>Usia : <?php echo $data->umur; ?></h6>
                                <h6>Alamat : <?php echo $data->alamat; ?></h6>
                                <h6>No Telepon : <?php echo $data->no_telepon; ?></h6>
                                <br>
                                <h6>Di Diagnosa terkena virus Covid-19 Varian : <?php echo $data->nama_virus; ?></h6>
                                <br>
                                <h5>Solusi :</h5>
                                <h6><?php echo $data->solusi; ?></h6>
                                <br>
                                <br>
                            <?php } ?>
                            <a href="<?php echo base_url('sistem_pakar') ?>" class="btn btn-round btn-secondary">Kembali Input<sapn class="btn-icon-right"><i class="fa fa-pencil"></i>
                            </a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>