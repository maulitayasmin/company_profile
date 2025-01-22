<?php
// Ambil bahasa yang disimpan di session
$lang = session()->get('lang') ?? 'id'; // Default ke 'en' jika tidak ada di session

$current_url = uri_string();

// Ambil query string (misalnya ?keyword=sukses)
$query_string = $_SERVER['QUERY_STRING']; // Mengambil query string dari URL

// Simpan segmen bahasa saat ini
$lang_segment = substr($current_url, 0, strpos($current_url, '/') + 1); // Menyimpan 'id/' atau 'en/'

// Definisikan tautan untuk setiap halaman berdasarkan bahasa
$homeLink = ($lang_segment === 'en/') ? '/' : '/';
$profilLink = ($lang_segment === 'en/') ? 'profile' : 'profil';
$kontakLink = ($lang_segment === 'en/') ? 'contact' : 'kontak';

// Buat array untuk menggantikan segmen berdasarkan bahasa
$replace_map = [
    'profil' => 'profile',
    'kontak' => 'contact',
];

// Ambil bagian dari URL tanpa segmen bahasa
$url_without_lang = substr($current_url, strlen($lang_segment));

// Tentukan bahasa yang ingin digunakan
$new_lang_segment = ($lang_segment === 'en/') ? 'id/' : 'en/';

// Gantikan setiap segmen dalam URL berdasarkan bahasa yang aktif
foreach ($replace_map as $indonesian_segment => $english_segment) {
    if ($lang_segment === 'en/') {
        // Jika bahasa yang dipilih adalah 'en', maka ganti segmen ID ke EN
        $url_without_lang = str_replace($english_segment, $indonesian_segment, $url_without_lang);
    } else {
        // Jika bahasa yang dipilih adalah 'id', maka ganti segmen EN ke ID
        $url_without_lang = str_replace($indonesian_segment, $english_segment, $url_without_lang);
    }
}

// Tautan dengan bahasa yang baru
$clean_url = $new_lang_segment . ltrim($url_without_lang, '/');

// Gabungkan query string jika ada
if (!empty($query_string)) {
    $clean_url .= '?' . $query_string;
}


// Tautan Bahasa Inggris
$english_url = base_url($clean_url);

// Tautan Bahasa Indonesia
$indonesia_url = base_url($clean_url);
?>

<style>
    /* Styling untuk sitename */
    .sitename {
        color: #ffffff;
        /* Warna teks putih */
        font-size: 24px;
        /* Ukuran font */
        font-weight: bold;
        /* Ketebalan font */
        transition: color 0.3s ease;
        /* Efek transisi saat hover */
    }

    .sitename:hover {
        color: #007bff;
        /* Warna teks saat hover */
    }
</style>

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Maulita</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="<?= base_url($lang . '/' . $homeLink) ?>"
                        class="<?= uri_string() == $lang . '/' . $homeLink ? 'active' : '' ?>">
                        <?= lang('bahasa.nav1'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url($lang . '/' . $profilLink) ?>"
                        class="<?= uri_string() == $lang . '/' . $profilLink ? 'active' : '' ?>">
                        <?= lang('bahasa.nav2'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url($lang . '/' . $kontakLink) ?>"
                        class="<?= uri_string() == $lang . '/' . $kontakLink ? 'active' : '' ?>">
                        <?= lang('bahasa.nav3'); ?>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= lang('bahasa.nav4'); ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li>
                            <a href="<?= $indonesia_url; ?>" <?= $lang === 'id' ? 'class="active disabled"' : ''; ?>><img src="<?= base_url('assets/img/indonesia.jpg') ?>" alt="EN Flag" class="flag-icon me-1" style="width: 20px;">Indonesia</a>
                        </li>
                        <li>
                            <a href="<?= $english_url; ?>" <?= $lang === 'en' ? 'class="active disabled"' : ''; ?>><img src="<?= base_url('assets/img/english.jpg') ?>" alt="EN Flag" class="flag-icon me-1" style="width: 20px;">English</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- <a class="btn-getstarted" href="index.html#about">Get Started</a> -->

    </div>
</header>