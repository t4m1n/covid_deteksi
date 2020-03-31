<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <?php echo @$this->session->flashdata('msg'); ?>

                <form class="form-horizontal" action="<?php echo base_url() . 'Deteksi/add_aksi'; ?>" method="post">

                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="form-body">
                                <div class="form-group">
                                    <label><b>IDENTITAS DIRI</b></label>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jkel" required>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>Tgl. Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lhr" required>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>No. WA</label>
                                    <input type="number" class="form-control" name="wa" required>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>Alamat Sekarang</label>
                                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label></label>
                                </div>
                                <div class="form-group">
                                    <label><b>GEJALA</b></label>
                                </div>
                                <div class="form-group col-12 col-md-3 col-lg-3">
                                    <label>1. Demam / Riwayat Demam</label>
                                    <select class="form-control" name="soal11" required>
                                        <option></option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-3 col-lg-3">
                                    <label>2. Batuk / Pilek / Nyeri Tenggorokan</label>
                                    <select class="form-control" name="soal12" required>
                                        <option></option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-3 col-lg-3">
                                    <label>3. Sesak Nafas</label>
                                    <select class="form-control" name="soal13" required>
                                        <option></option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label></label>
                                </div>
                                <div class="form-group">
                                    <label><b>DETEKSI FAKTOR RISIKO</b></label>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label><b>1.</b> Riwayat perjalanan ke luar negeri atau kota terjangkit di Indonesia dalam waktu 14 hari sebelum timbul gejala.</label>
                                    <select class="form-control" name="soal21" id="soal21" required>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6" id="soal22">
                                    <label>Kota Terjangkit ?</label>
                                    <select name="soal22" class="form-control select2" required>
                                        <?php foreach ($kota as $b) { ?>
                                            <option value="<?php echo $b->id_daerah ?>"><?php echo $b->desc_daerah ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label><b>2.</b> Memiliki riwayat paparan salah satu atau lebih</label>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>a. Riwayat kontak erat dengan kasus positif COVID-19</label>
                                    <select class="form-control" name="soal23" required>
                                        <option></option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>b. Bekerja atau mengunjungi fasilitas kesehatan yang berhubungan dengan pasien positif COVID-19</label>
                                    <select class="form-control" name="soal24" required>
                                        <option></option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>c. Memiliki riwayat kontak dengan hewan penular (Jika hewan penular sudah teridentifikasi)</label>
                                    <select class="form-control" name="soal25" required>
                                        <option></option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6 col-lg-6">
                                    <label>d. Memiliki demam lebih 38 Derajat Calcius atau ada riwayat demam, memiliki riwayat perjalanan ke luar negeri atau kontak dengan orang yang memiliki riwayat perjalanan ke luar negeri</label>
                                    <select class="form-control" name="soal26" required>
                                        <option></option>
                                        <option value="1">YA</option>
                                        <option value="0">TIDAK</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer small text-muted">
                            <input type="submit" class="btn btn-success pull-left" value="Simpan">
                        </div>

                </form>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

    <script>
        $(function() {

            $("#soal21").change(function() {

                if ($(this).val() == "0") {
                    $("#soal22").hide();
                    $("#soal22").attr('disabled', 'True');

                } else {
                    $("#soal22").show();
                    $("#soal22").removeAttr('disabled');
                }
            });
        });
    </script>

</body>

</html>