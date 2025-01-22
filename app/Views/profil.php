<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span><?= lang('bahasa.nav2'); ?><br></span>
        <h2><?= lang('bahasa.nav2'); ?></h2>
        <?php if (!empty($tb_profil)): ?>
            <?php foreach ($tb_profil as $profil): ?>
                <img
                    src="/assets/img/<?= $profil['logo_perusahaan']; ?>"
                    style="
        width: 100px; 
        height: 100px; 
        object-fit: cover; 
        border-radius: 50%; 
        border: 2px solid #ccc; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    ">
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                <img
                    src="/assets/img/<?= $profil['foto_perusahaan']; ?>"
                    class="img-fluid d-block w-100 carousel-img" alt="">
            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                <h3><?= lang('bahasa.nama'); ?></h3>
                <p class="fst-italic">
                    <?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Data kontak tidak tersedia.</p>
<?php endif; ?>
    </div>

</section><!-- /About Section -->

<?= $this->endSection(); ?>