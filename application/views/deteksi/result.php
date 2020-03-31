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

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <img src="<?php echo base_url(); ?>assets/image/<?php echo $result->img ?>" class="rounded mx-auto d-block w-75" alt="Result">
                            </div>
                            <div class="col-xl-9 col-sm-6 mb-9">
                                <div class="card text-white o-hidden h-100 <?php echo $result->bg ?>">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fas fa-fw fa-comments"></i>
                                        </div>
                                        <div class="mr-5">
                                            <h4><?php echo $result->desc_result ?></h4>
                                        </div>
                                    </div>
                                    <div class="card-footer text-white clearfix small z-1">
                                        <span class="float-left">
                                            <blockquote class="blockquote">
                                                <b><?php echo $result->nama ?></b> 
                                                Anda termasuk dalam pasien <b><?php echo $result->desc_result ?></b><br><br>
                                                <b>Saran:</b><br>
                                                <?php echo $result->saran ?><br><br>
                                                <b>Edukasi:</b><br>
                                                <?php echo $result->edukasi ?>
                                            </blockquote>
                                        </span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>
                                Menghadapi wabah Covid-19 yang semakin hari semakin membuat takut dan menimbulkan rasa tidak aman bagi masyarakat dunia, Universitas Andalas Padang turut berpartisipasi dalam menyediakan sistem deteksi dini terhadap serangan Covid-19.
                                <br>
                                <br>
                                Deteksi dini ini dibuat online yang dapat dimanfaatkan oleh masyarakat umum. Saudara tinggal menjawab beberapa pertanyaan dan hasil jawaban akan dianalisis secara online untuk menduga status saudara termasuk dalam kategori: sehat/bebas Covid-19, ODP (Orang Dalam Pemantauan) atau PDP (Pasien Dalam Pengawasan).
                                <br>
                                <br>
                                <b>Call Center Tim Kewaspadaan COVID-19 Universitas Andalas :</b>
                                <br>
                                MEDIS : 082386615683
                                <br>
                                UMUM : 085294051915
                            </p>
                            <footer class="blockquote-footer">Tim Kewaspadaan COVID-19 Universitas Andalas</footer>
                        </blockquote>
                    </div>
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

</body>

</html>