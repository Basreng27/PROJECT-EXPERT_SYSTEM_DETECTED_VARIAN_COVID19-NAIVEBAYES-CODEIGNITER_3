<div class="content-body">
    <div class="container-fluid">

        <!-- <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mt-lg mb-lg slider-primary" data-plugin-slider data-plugin-options='{ "value": 5, "range": "min", "max": 10, "step" : 0.1 }' data-plugin-slider-output="#listenSlider">
                            <input id="listenSlider" type="hidden" value="5" />
                        </div>
                        <h6 class="output">angka: 5</h6>
                        </h6>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="mt-lg mb-lg slider-primary" data-plugin-slider data-plugin-options='{ "value": 5, "range": "min", "max": 10, "step" : 0.1 }' data-plugin-slider-output="#listenSlider">
                                                        <input id="listenSlider" type="hidden" value="5" />
                                                    </div>
                                                    <h6 class="output">angka: 5</h6>
                                                    </h6> -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <!-- <form action="<?php echo base_url() ?>proses_tambah_bobot" method="POST"> -->
                <?php foreach ($get_virus as $adat) { ?>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <?php
                                echo $adat->nama_virus;
                                $kd_virus = $adat->kode_virus
                                ?>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Virus</th>
                                            <!-- <th>Nama Virus</th> -->
                                            <th>Kode Gejala</th>
                                            <th>Nama Gejala</th>
                                            <th>Bobot</th>
                                            <th>Simpan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_gejala_virus = $this->M_admin->get_gejala_virus($kd_virus)->result();
                                        $no = 1;
                                        foreach ($get_gejala_virus as $data) { ?>
                                            <tr class="h6">
                                                <form action="<?php echo base_url() ?>simpan_bobot" method="POST">
                                                    <td><?php echo $no++ ?></td>
                                                    <td><input type="hidden" name="kode_virus" value="<?php echo $data->kode_virus ?>" readonly><?php echo $data->kode_virus ?></td>
                                                    <!-- <td><?php echo $data->nama_virus ?></td> -->
                                                    <td><input type="hidden" name="kode_gejala" value="<?php echo $data->kode_gejala ?>" readonly><?php echo $data->kode_gejala ?></td>
                                                    <td><?php echo $data->nama_gejala ?></td>
                                                    <td>
                                                        <select class="form-control" name="bobot">
                                                            <?php if ($data->bobot > 0) { ?>
                                                                <option value="<?php $data->bobot ?>">Iya</option>
                                                                <option value="0">Tidak</option>
                                                            <?php } else { ?>
                                                                <option value="<?php $data->bobot ?>">Tidak</option>
                                                                <option value="1">Iya</option>
                                                            <?php } ?>
                                                        </select>
                                                        <!-- <input type="number" class="form-control input-rounded" name="bobot" min="0" max="10" placeholder="Masukan Bobot" value="<?php echo $data->bobot ?>" required> -->
                                                    <td>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-rounded btn-primary" name="submit" value="submit">Simpan</button>
                                                        </div>
                                                        <!-- <a href="<?php echo base_url('simpan_bobot/' . $data->kode_virus . '/' . $data->kode_gejala) ?>" class="btn btn-round btn-secondary">Edit<sapn class="btn-icon-right"><i class="fa fa-pencil"></i>
                                                        </a> -->
                                                    </td>
                                                </form>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>