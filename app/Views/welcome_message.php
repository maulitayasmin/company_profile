<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>
<section id="hero" class="hero section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                <h2><?= lang('bahasa.nama'); ?></h2>
                <?php if (!empty($tb_slider)): ?>
                    <?php foreach ($tb_slider as $slider) : ?>
                        <p><?= $lang == 'id' ? $slider['caption_slider_id'] : $slider['caption_slider_en']; ?></p>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="100">
                <!-- Bootstrap Carousel -->
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url('assets/img/' . $slider['foto_slider1']); ?>" class="img-fluid d-block w-100 carousel-img" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('assets/img/' . $slider['foto_slider2']); ?>" class="img-fluid d-block w-100 carousel-img" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('assets/img/' . $slider['foto_slider3']); ?>" class="img-fluid d-block w-100 carousel-img" alt="Slide 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No sliders available.</p>
        <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span><?= lang('bahasa.nav2'); ?><br></span>
        <h2><?= lang('bahasa.nav2'); ?></h2>
        <?php if (!empty($tb_profil)): ?>
            <?php foreach ($tb_profil as $profil): ?>
                <img
                    src="<?= base_url('assets/img/' . $profil['logo_perusahaan']); ?>"
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
                    src="<?= base_url('assets/img/' . $profil['foto_perusahaan']); ?>"
                    class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                <?php if ($lang == 'id'): ?>
                    <h3><?= lang('bahasa.nama'); ?></h3>
                    <p class="fst-italic">
                        <?= lang('bahasa.descid'); ?><a href="/id/profil" class="btn-get-started">Selengkapnya</a>
                    </p>
                <?php else: ?>
                    <h3><?= lang('bahasa.nama'); ?></h3>
                    <p class="fst-italic">
                        <?= lang('bahasa.descen'); ?><a href="/en/profile" class="btn-get-started">Read More</a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Data tidak tersedia.</p>
<?php endif; ?>
    </div>
</section><!-- /About Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span><?= lang('bahasa.nav3'); ?></span>
        <h2><?= lang('bahasa.nav3'); ?></h2>
        <?php if (!empty($tb_kontak)): ?>
            <?php foreach ($tb_kontak as $kontak): ?>
                <p><?= $lang == 'id' ? $kontak['deskripsi_kontak_id'] : $kontak['deskripsi_kontak_en']; ?></p>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Data kontak tidak tersedia.</p>
        <?php endif; ?>
    </div><!-- End Section Title -->

    <div class="text-center mt-4">
        <?php if ($lang == 'id'): ?>
            <a href="/id/kontak" class="btn-get-started">Selengkapnya</a>
        <?php else: ?>
            <a href="/en/contact" class="btn-get-started">Read More</a>
        <?php endif; ?>
    </div>
</section><!-- /Contact Section -->

<?= $this->endSection(); ?>