<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
        }
        .logo img {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }
        .profile-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .description {
            margin: 20px 0;
        }
        .description h2 {
            color: #333;
        }
        .description p {
            line-height: 1.6;
            color: #555;
        }
        .language-toggle {
            text-align: right;
            margin-bottom: 20px;
        }
        .language-toggle button {
            padding: 10px 15px;
            margin-left: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .language-toggle button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo_perusahaan.jpg" alt="Logo Perusahaan">
        </div>
        <div class="profile-image">
            <img src="foto_perusahaan.jpg" alt="Foto Perusahaan">
        </div>
        <div class="language-toggle">
            <button onclick="showDescription('id')">Bahasa Indonesia</button>
            <button onclick="showDescription('en')">English</button>
        </div>
        <div class="description">
            <h2 id="nama_perusahaan">Nama Perusahaan</h2>
            <p id="deskripsi">Deskripsi perusahaan akan ditampilkan di sini...</p>
        </div>
    </div>
    <script>
        const descriptions = {
            id: "Deskripsi perusahaan dalam Bahasa Indonesia. Perusahaan kami berdiri sejak tahun ...",
            en: "Company description in English. Our company was established in ..."
        };

        function showDescription(lang) {
            document.getElementById('deskripsi').innerText = descriptions[lang];
        }
    </script>
</body>
</html>


<ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>