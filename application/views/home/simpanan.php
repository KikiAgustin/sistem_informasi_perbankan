<!-- ======= About Lists Section ======= -->
<section class="about-lists">
    <div class="container">

        <div class="row no-gutters">
            <?php $i = 1; ?>
            <?php foreach ($simpanan as $sp) : ?>
                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                    <a href="<?= base_url('Home/detailSimpanan/') . $sp['id_simpanan']; ?>">
                        <span>0<?= $i; ?></span>
                        <h4 style="color: black;"><?= $sp['nama_simpanan']; ?></h4>
                        <p><?= $sp["pendek"]; ?></p>
                    </a>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>


        </div>

    </div>
</section><!-- End About Lists Section -->