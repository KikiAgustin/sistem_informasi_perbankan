<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('<?= base_url('assets/mamba/'); ?>assets/img/slide/slide-2.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>BANKKU</span></h2>
                            <p class="animate__animated animate__fadeInUp">Dapatkan layanan terbaik, untuk para pengusaha</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('<?= base_url('assets/mamba/'); ?>assets/img/slide/simpanan.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Simpanan</h2>
                            <p class="animate__animated animate__fadeInUp">Salah satu produk unggulan dari kami adalah simpanan</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('<?= base_url('assets/mamba/'); ?>assets/img/slide/pinjaman.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Pinjaman</h2>
                            <p class="animate__animated animate__fadeInUp">Selain simpanan kami juga ada pinjaman</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="<?= base_url('assets/mamba/'); ?>assets/img/about1.jpg" class="img-fluid" alt="">
                    <a target="blank" href="https://www.youtube.com/watch?v=GTDVfhOSfKU" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <h2>Tentang Kami</h2>
                        <p>BANKKU di dirikan pada 15 Maret 2021, meskipun kami baru berdiri tahun sekarang, tetapi kami mempunyai visi dan misi untuk memajukan dunia perbankan di indonesia</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">VISI</a></h4>
                        <p class="description">Menjadi Patner untuk para usaha muda</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">MISI</a></h4>
                        <p class="description">Memberikan solusi untuk para usaha muda dengan layanan perbankan yang handal</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Client kami</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Patners Perusahaan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Kami Berdiri</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box">
                        <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Penghargaan Yang Didapat</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Layanan Kami</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
                    <h4 class="title"><a href="<?= base_url('Home/simpanan'); ?>">Simpanan</a></h4>
                    <p class="description">Dapatkan Keuntungan dan kenyamanan yang lebih baik dengan berbagai solusi simpanan dari Bank </p>
                </div>
                <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-bounding-box"></i></div>
                    <h4 class="title"><a href="<?= base_url('Home/pinjaman'); ?>">Pinjaman</a></h4>
                    <p class="description">Kami siap membantu mengembangkan bisnis anda dalam memberikan fasilitas pinjaman yang bisa disesuaikan dengan bisnis anda</p>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team Kami</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url('assets/mamba/'); ?>assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url('assets/mamba/'); ?>assets/img/team/team.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Kiki Agustin</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url('assets/mamba/'); ?>assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Liani Kuspita</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url('assets/mamba/'); ?>assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Silahkan baca sebelum menggunakan layanan kami</h2>
            </div>

            <div class="row  d-flex align-items-stretch">

                <div class="col-lg-6 faq-item" data-aos="fade-up">
                    <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>

                <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                    <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                    </p>
                </div>

                <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
                    <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                    </p>
                </div>

                <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
                    <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                    </p>
                </div>

                <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
                    <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>

                <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
                    <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->