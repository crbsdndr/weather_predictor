<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Maju Terus</title>
    <link rel="icon" href="{{ asset(path: " images/favicon.png")}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Style untuk judul artikel */
        .artikel-text h5 {
            text-align: justify;
            /* Judul artikel rata kiri */
            font-weight: bold;
            font-size: 1.25rem;
            /* Sesuaikan ukuran font sesuai keinginan */
            margin-bottom: 0.5rem;
            /* Jarak bawah antara judul dan paragraf */
        }

        /* Style untuk paragraf artikel */
        .artikel-text p {
            text-align: justify;
            /* Paragraf rata kiri */
            font-size: 1rem;
            /* Sesuaikan ukuran font */
            line-height: 1.5;
            /* Jarak antar baris paragraf */
            color: #333;
            /* Warna teks */
        }

        /* Style untuk kontainer artikel agar lebih rapi */
        .artikel-item {
            padding: 15px;
            /* Spasi di dalam konten artikel */
            margin-bottom: 1rem;
            /* Jarak bawah antar artikel */
            background-color: #fff;
            /* Warna background artikel */
            border-radius: 5px;
            /* Membuat sudut sedikit melengkung */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Menambahkan bayangan lembut */
        }

        /* Style untuk bagian Artikel Lainnya */
        .artikel-lainnya-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .artikel-lainnya-item .icon-circle {
            width: 30px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.9rem;
        }

        .artikel-link {
            text-align: justify;
            color: #000;
            /* Warna teks hitam */
            font-size: 0.95rem;
            /* Ukuran font artikel */
            text-decoration: none;
            /* Menghilangkan garis bawah pada link */
            line-height: 1.5;
        }

        .artikel-link:hover {
            color: #007bff;
            /* Warna teks berubah saat di-hover */
            text-decoration: underline;
            /* Teks bergaris bawah saat di-hover */
        }

        .form-label {
            text-align: left;
            /* Meratakan teks ke kiri */
            display: block;
            /* Pastikan label ditampilkan sebagai blok */
            margin-bottom: 5px;
            /* Menambahkan jarak di bawah label */
        }

        /* Default untuk semua layar */
        .header-info .col-md {
            flex: 1;
            /* Set kolom menjadi fleksibel secara default */
            padding: 10px;
            /* Tambahkan padding untuk jarak antar kolom */
            text-align: center;
            /* Pusatkan konten di dalam kolom */
        }

        /* Aturan khusus untuk layar mobile (maksimum 576px) */
        @media (max-width: 576px) {
            .header-info .col-md {
                flex: 0 0 100%;
                /* Set kolom menjadi 1 kolom per baris di layar mobile */
                max-width: 100%;
            }
        }

        /* Responsive untuk sambutan pada mobile */
        @media (max-width: 768px) {
            .header-info .col-md {
                flex: 0 0 100%;
                /* Set kolom menjadi 2 kolom per baris di layar tablet */
                max-width: 100%;
            }
        }


        /* Untuk layar besar */
        @media (min-width: 1200px) {
            header-info .col-md {
                margin-top: 60px;
                margin-bottom: 60px;
            }
        }


        @media (max-width: 560px) {
            .custom-hide {
                display: none;
                /* Menyembunyikan elemen pada layar di bawah 560px */
            }
        }
    </style>

    </style>
</head>

<body>
    <!-- Header Info Section -->
    <!-- Header Info Section -->
    <div class="header-info bg-primary text-white" style="padding-top: 0px; padding-bottom: 0px;">
        <div class="row">
            <div class="col-md-8 custom-hide" style="font-family: Comic Sans MS;">
                <h6 class="fab fa-whatsapp" style="padding-left: 30px; padding-top: 5px; padding-right: 30px;">
                    081 </h6>
                <h6 class="fas fa-phone-alt" style="padding-left: 30px; padding-top: 5px; padding-right: 30px;">
                    08122240721 </h6>
                <h6 class="fas fa-envelope" style="padding-left: 30px; padding-top: 5px; padding-right: 30px;">
                    info@majuterus.sch.id </h6>
            </div>

            <!-- Bagian ini akan hilang di layar mobile -->
            <div class="col-md-3 d-none d-md-block" style="padding-top:5px; text-align: left; text-align:right;">
                <h6>Telusuri Kami
                    <a href="" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                    <a href="" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="" class="text-white me-2"><i class="fab fa-youtube"></i></a>
                </h6>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/sekolah/logo.png" alt="Logo" width="50" height="50"
                    class="d-inline-block align-text-top me-2">
                <div class="text-start">
                    <span class="d-block fw-bold">SMK Maju Terus</span>
                    <small class="d-block text-primary"><em>Enabling you to Industri</em></small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?aksi=profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?aksi=fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?aksi=guru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?aksi=artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?aksi=prestasi">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?aksi=kontak">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slideshow Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="images/slide/slide1.png" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Temukan Masa depan Gemilang</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/slide/slide2.png" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Temukan Masa depan Gemilang 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/slide/slide3.png" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Temukan Masa depan Gemilang 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/slide/679255ae5a59b.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Kegiatan kegiatan sekolah kami</h2>
                    <p>
                    <p>rer-efef</p>
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/slide/679332c4689f5.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Firlik</h2>
                    <p>
                    <p>fulu fulu fulu</p>
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/slide/6792560376245.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>qiqi</h2>
                    <p>
                    <p>we</p>
                    </p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Main Content Section -->
    <section id="kontenutama" class="kontenutama">
        <div class="row">
            <!-- Kolom pertama -->
            <div class="col-md-3 mb-3"> <!-- Menambahkan margin bottom -->
                <div class="p-3 bg-light border shadow-sm rounded">
                    <h4 class="konten-title">Lokasi Sekolah</h4>
                    <!-- Ganti img dengan iframe Google Maps -->
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5979934865886!2d107.65442027491147!3d-6.938554693061448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8109c2647c7%3A0xe47eec0775b8d648!2sVocational%20High%20School%2013%20Bandung!5e0!3m2!1sen!2sid!4v1736488340293!5m2!1sen!2sid"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>


            <!-- Kolom kedua -->
            <div class="col-md-6 mb-6"> <!-- Menambahkan margin bottom -->
                <div class="p-3 bg-light border shadow-sm rounded konten-container">
                    <h4 class="konten-title">Sambutan Kepala Sekolah</h4>
                    <!-- Gambar di bawah h3 -->
                    <img src="images/profil/profil3.png" class="img-fluid rounded-circle school-head-image"
                        alt="Kepala Sekolah">
                    <p><em>Assalamu&rsquo;alaikum Warahmatullahi Wabarakatuh,</em></p>
                    <p>Puji syukur kami panjatkan ke hadirat Allah SWT yang telah memberikan rahmat dan karunia-Nya,
                        sehingga kami dapat menghadirkan website ini sebagai sarana informasi dan komunikasi antara
                        sekolah, siswa, orang tua, serta masyarakat umum.</p>
                    <p>Selamat datang di website resmi <strong>SMK Maju Terus</strong>. Website ini merupakan wujud dari
                        komitmen kami untuk terus mengikuti perkembangan teknologi informasi di era digital, serta ...
                        <a href="./index.php?aksi=sambutan">Selengkapnya</a>
                </div>
            </div>


            <!-- Kolom ketiga -->
            <div class="col-md-3 mb-3"> <!-- Menambahkan margin bottom -->
                <div class="p-3 bg-light border shadow-sm rounded">
                    <h4 class="konten-title">Informasi Data</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i class="fas fa-chalkboard-teacher"></i> {{$jumlahGuru}} Orang Guru
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-trophy"></i> 1 Prestasi
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-hammer"></i> 6 Fasilitas
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-users"></i> 3 Pengunjung Web
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Tombol Live Chat -->
    <button type="button" class="btn btn-success rounded-circle" id="liveChatBtn" data-bs-toggle="modal"
        data-bs-target="#chatModal" title="Live Chat"
        style="position: fixed; bottom: 120px; right: 20px; z-index: 999;">
        <i class="fas fa-comments fa-lg"></i>
    </button>


    <!-- Modal Chat -->
    <!-- Chat Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">Live Chat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="chat-box" style="height: 300px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                        <!-- Pesan chat akan muncul di sini -->
                    </div>

                    <form id="chat-form" onsubmit="return handleSubmit(event);">
                        <div class="input-group mt-3">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Nama" required>
                            <textarea class="form-control" name="message" placeholder="Pesan" required></textarea>
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <!-- Tombol Go to Top -->
    <button onclick="topFunction()" id="goTopBtn" title="Go to Top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Footer Section -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row text-center text-md-start">
                <!-- Kolom Call -->
                <div class="col-12 col-md-4 mb-3">
                    <h5>Call</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone-alt"></i>08122240721</li>
                        <li><i class="fas fa-envelope"></i>info@majuterus.sch.id</li>
                        <li><i class="fab fa-whatsapp"></i>081</li>
                        <li><i class="fas fa-home"></i>Alamat : bandung x3</li>
                    </ul>
                </div>

                <!-- Kolom Link -->
                <div class="col-12 col-md-4 mb-3">
                    <h5>Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php" class="text-white">Beranda</a></li>
                        <li><a href="./index.php?aksi=profil" class="text-white">Profil</a></li>
                        <li><a href="./index.php?aksi=fasilitas" class="text-white">Fasilitas</a></li>
                        <li><a href="./index.php?aksi=guru" class="text-white">Staf & Guru</a></li>
                        <li><a href="./index.php?aksi=artikel" class="text-white">Artikel</a></li>
                        <li><a href="./index.php?aksi=kontak" class="text-white">Call me</a></li>
                    </ul>
                </div>

                <!-- Kolom Telusuri Kami -->
                <div class="col-12 col-md-4 mb-3 text-md-center d-none d-md-block">
                    <h5>Telusuri Kami</h5>
                    <a href="htttp://" class="text-white me-2"><i class="fab fa-facebook-f fa-2x"></i></a>
                    <a href="https://instagram.com/kami" class="text-white me-2"><i
                            class="fab fa-instagram fa-2x"></i></a>
                    <a href="twitter" class="text-white me-2"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="http:/youtube.com" class="text-white me-2"><i class="fab fa-youtube fa-2x"></i></a>
                </div>


            </div>
            <hr class="my-3 border-white">
            <div class="text-center">
                <p>&copy; 2024, All Rights Reserved.</p>
            </div>
        </div>


        <!-- Footer Social Media Section (hanya terlihat di mobile) -->
        <div class="footer-info d-md-none fixed-bottom" style="padding-top: 5px; text-align: center;">
            <h6 style="color: blue;">Telusuri Kami
                <a href="htttp://" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://instagram.com/kami" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="twitter" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="http:/youtube.com" class="social-icon">
                    <i class="fab fa-youtube"></i>
                </a>
        </div>

        <!-- CSS -->
        <style>
            .social-icon {
                display: inline-block;
                width: 30px;
                /* Ukuran lebih kecil */
                height: 30px;
                /* Ukuran lebih kecil */
                margin: 0 8px;
                /* Spasi antar ikon */
                background-color: #b0c4de;
                /* Warna biru abu-abu */
                border-radius: 50%;
                /* Lingkaran */
                text-align: center;
                line-height: 30px;
                /* Menyelaraskan teks secara vertikal */
                color: #007bff;
                /* Warna tulisan biru */
                font-size: 14px;
                /* Ukuran ikon lebih kecil */
                transition: background-color 0.3s, color 0.3s;
                /* Transisi untuk efek hover dan aktif */
            }

            .social-icon:hover {
                background-color: #007bff;
                /* Warna biru pada hover */
                color: white;
                /* Warna ikon putih pada hover */
            }

            .social-icon:active {
                background-color: #000;
                /* Warna hitam saat diklik */
                color: white;
                /* Warna tulisan putih saat diklik */
            }

            .footer-info {
                position: fixed;
                /* Memastikan tetap terlihat saat menggulir */
                bottom: 0;
                left: 0;
                width: 100%;
                /* Lebar penuh */
                z-index: 1000;
                /* Menjaga agar tetap di atas konten lainnya */
                background: rgba(255, 250, 240, 0.8);
                /* Menggunakan rgba untuk transparansi floralwhite */
                padding: 10px 0;
                /* Padding vertikal */
            }

            #goTopBtn {
                position: fixed;
                /* Tetap di posisi tetap */
                bottom: 50px;
                /* Jarak dari bawah */
                right: 20px;
                /* Jarak dari kanan */
                background-color: rgba(176, 196, 222, 0.8);
                /* Warna biru abu-abu sedikit transparan */
                color: #000;
                /* Warna ikon */
                border: none;
                /* Tanpa border */
                border-radius: 50%;
                /* Membuat lingkaran */
                width: 50px;
                /* Ukuran lebar lingkaran */
                height: 50px;
                /* Ukuran tinggi lingkaran */
                display: flex;
                /* Menggunakan flexbox */
                align-items: center;
                /* Memusatkan ikon secara vertikal */
                justify-content: center;
                /* Memusatkan ikon secara horizontal */
                font-size: 20px;
                /* Ukuran ikon */
                transition: background-color 0.5s;
                /* Efek transisi saat hover */
                z-index: 1000;
                /* Memastikan di atas elemen lain */
            }

            #goTopBtn:hover {
                background-color: rgba(0, 123, 255, 0.8);
                /* Warna latar belakang saat hover menjadi sedikit transparan */
                color: white;
                /* Warna ikon saat hover */
            }
        </style>







    </footer>

    <!-- Bootstrap JS and other Scripts -->
    <!-- Script untuk tombol Go to Top -->
    <script>
        // Get the button
        let goTopBtn = document.getElementById("goTopBtn");
        let liveChatBtn = document.getElementById("liveChatBtn");

        // When the user scrolls down 20px from the top of the document, show the buttons
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                goTopBtn.style.display = "block";
                liveChatBtn.style.display = "block"; // Menampilkan tombol Live Chat
            } else {
                goTopBtn.style.display = "none";
                liveChatBtn.style.display = "none"; // Menyembunyikan tombol Live Chat
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
        }
    </script>

    <!-- Bootstrap JS and other Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        // JavaScript untuk validasi form
        (function () {
            'use strict'

            // Ambil form dengan class 'needs-validation'
            var forms = document.querySelectorAll('.needs-validation')

            // Lakukan loop untuk mencegah form yang tidak valid di-submit
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })() 
    </script>


    <!-- untuk live chat JS and other Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Load chat messages
        function loadChat() {
            $.ajax({
                url: 'load_chat.php',
                method: 'GET',
                success: function (data) {
                    $('#chat-box').html(data);
                }
            });
        }

        // Send chat message
        $('#chat-form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'send_chat.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    loadChat();
                    //  $('#chat-form')[0].reset();

                    //  $('input[name="name"]').val(""); // Mengosongkan input name
                    $('textarea[name="message"]').val(""); // Mengosongkan pesan
                }
            });
        });

        // Load chat messages every 5 seconds
        setInterval(loadChat, 5000);

        function handleSubmit(event) {
            // Mencegah form dari pengiriman default
            event.preventDefault();

            // Ambil nilai dari input name
            const name = document.getElementById("name").value;
            const message = document.querySelector("textarea[name='message']").value;

            // Proses data di sini (misalnya, kirim ke server dengan AJAX)
            console.log("Nama:", name);
            console.log("Pesan:", message);

            // Jika ingin tetap menampilkan nilai pada input, jangan reset nilainya
            // Anda bisa mengosongkan textarea jika diperlukan
            //  document.querySelector("text[name='name']").value = name; // Mengosongkan pesan
        }
    </script>
</body>

</html>