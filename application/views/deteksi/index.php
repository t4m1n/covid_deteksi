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

                <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
                <?php //$this->load->view("admin/_partials/breadcrumb.php") 
                ?>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5"><?php echo $count->tot; ?> User</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">User yang menggunakan</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">11 New Tasks!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">123 New Orders!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">13 New Tickets!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    -->
                </div>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-body">
                        <center>
                            <h4><a href="http://covid19.unand.ac.id/">Tim Kewaspadaan COVID-19 Universitas Andalas</a></h4>
                            <h3>Assalamu'alaikum Wr. Wb.</h3>
                        </center>

                        <br />
                        <br />

                        <blockquote class="blockquote">
                            <p>
                                Menghadapi wabah Covid-19 yang semakin hari semakin membuat takut dan menimbulkan rasa tidak aman bagi masyarakat dunia, Universitas Andalas Padang turut berpartisipasi dalam menyediakan sistem deteksi dini terhadap serangan Covid-19.
                                <br>
                                <br>
                                Deteksi dini ini dibuat online yang dapat dimanfaatkan oleh masyarakat umum. Saudara tinggal menjawab beberapa pertanyaan dan hasil jawaban akan dianalisis secara online untuk menduga status saudara termasuk dalam kategori: sehat/bebas Covid-19, ODP (Orang Dalam Pemantauan) atau PDP (Pasien Dalam Pengawasan).
                                <br>
                                <br>
                                Untuk deteksi dini Covid-19 silahkan<br>
                                <a class="btn btn-success pull-left" href="<?php echo base_url() . 'Deteksi/add'; ?>">DETEKSI COVID-19</a><br><br>
                                <br>
                                <b>Call Center Tim Kewaspadaan COVID-19 Universitas Andalas :</b>
                                <br>
                                MEDIS : 082386615683
                                <br>
                                UMUM : 085294051915
                                <br>
                                <br>
                                Jumlah User yang sudah menggunakan:
                                <br>
                                <h3><?php echo $count->tot; ?></h3>
                            </p>
                            <footer class="blockquote-footer">Tim Kewaspadaan COVID-19 Universitas Andalas</footer>
                        </blockquote>
                    </div>
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
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>