<section class="about-lists">
    <div class="container">
        <div class="row no-gutters">
            <p><?= $detailPinjaman["detail_pinjaman"]; ?></p>
            <b>fitur :</b>
            <ul>
                <?php foreach ($fiturPinjaman as $fp) : ?>
                    <li><?= $fp["nama_fitur"]; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>