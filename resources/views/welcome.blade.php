
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bimbel CPNS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="#beranda">
                    <img src="{{ asset('images/logo-privat-nusantara-web.webp') }}" alt="Privat Nusantara">
                </a>

                <!-- Toggle Mobile -->
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu"
                    aria-controls="navbarMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#beranda"><b>Beranda</b></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#produk"><b>Produk</b></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#kontak"><b>Tentang</b></a>
                        </li>
                    </ul>

                    <a href="bimbelcpns.id" class="btn-contact">
                        <b>Kontak Kami</b>
                    </a>
                </div>

            </div>
        </nav>
    </header>

    <!-- KONTEN HOMEPAGE -->
    <section class="hero" id="beranda">
        <div class="container">
            <div class="row align-items-center">

                <!-- Tulisan -->
                <div class="col-lg-7">
                    <div class="hero-content">
                        <h1>
                            Bimbel {region} untuk Persiapan CPNS, PPPK & BUMN Bersama Pengajar Berpengalaman
                        </h1>

                        <p>
                            Menghadapi seleksi CPNS, PPPK, dan BUMN membutuhkan persiapan yang matang, bukan hanya mengandalkan latihan soal secara mandiri. Privat Nusantara menghadirkan program <b>bimbel {region}</b> dengan pendampingan pengajar berpengalaman untuk membantu peserta memahami materi dan meningkatkan kesiapan menghadapi ujian.
                        </p>
                        <p>
                            Melalui sistem belajar yang terarah, peserta mendapatkan bimbingan sesuai kebutuhan seleksi, mulai dari pemahaman konsep, pembahasan soal, hingga strategi menghadapi tes.
                        </p>
                        <p>
                            Tersedia pilihan pembelajaran <b>bimbel ke rumah {region}</b> maupun kelas online melalui Zoom/Google Meet dengan tutor yang membantu peserta belajar lebih efektif.
                        </p>
                        <ul>
                            <li>Konsultasi Program Belajar Gratis</li>
                            <li>Materi Seleksi Terarah</li>
                            <li>Pendampingan Bersama Tutor Berpengalaman</li>
                            <li>Latihan Soal & Evaluasi Berkala</li>
                        </ul>
                        <a href="bimbelcpns.id" class="btn-hero">
                            <b>Konsultasi Gratis</b>
                        </a>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="col-lg-5">
                    <div class="hero-image">
                        <img src="{{ asset('images/cpns.webp') }}"
                             alt="Persiapan CPNS">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROGRAM SECTION -->
    <section class="program-section" id="program">
        <div class="container">

            <!-- HEADING -->
            <div class="program-heading">
                <h2>
                    Program Bimbel CPNS, PPPK & BUMN dengan Strategi Belajar yang Terarah
                </h2>

                <p>
                    Persaingan dalam seleksi CPNS, PPPK, dan BUMN semakin tinggi sehingga peserta membutuhkan persiapan yang sistematis. Privat Nusantara membantu peserta membangun kemampuan melalui program belajar yang dirancang berdasarkan kebutuhan seleksi.
                </p>

                <p>
                    Kami mendampingi peserta dalam memahami pola ujian, memperkuat materi yang diperlukan, serta meningkatkan kemampuan menyelesaikan soal dengan lebih cepat dan tepat.
                </p>
            </div>


            <!-- PILIHAN PEMBELAJARAN -->
            <div class="row g-4 program-cards">

                <!-- BIMBEL TATAP MUKA -->
                <div class="col-md-6">
                    <div class="program-card">

                        <span class="program-badge">
                            <!-- <i class="bi bi-geo-alt-fill"></i> -->
                            Bimbel Offline
                        </span>

                        <div class="program-card-content">

                            <div class="program-icon">
                                <img src="{{ asset('images/icon-offline.svg') }}" alt="">
                            </div>

                            <span class="program-divider"></span>

                            <div class="program-info">
                                <h3>Bimbel Tatap Muka {region}</h3>

                                <p>
                                    Pembelajaran langsung bersama tutor dengan pendampingan yang lebih personal.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- BIMBEL ONLINE -->
                <div class="col-md-6">
                    <div class="program-card">

                        <span class="program-badge">
                            <!-- <i class="bi bi-laptop"></i> -->
                            Bimbel Online
                        </span>

                        <div class="program-card-content">

                            <div class="program-icon">
                                <img src="{{ asset('images/icon-online.svg') }}" alt="">
                            </div>

                            <span class="program-divider"></span>

                            <div class="program-info">
                                <h3>Bimbel Online</h3>

                                <p>
                                    Kelas fleksibel melalui Zoom/Google Meet yang dapat diikuti dari berbagai lokasi.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <!-- DESKRIPSI LANJUTAN -->
            <div class="program-description">

                <p>
                    Program bimbel kami mendukung persiapan berbagai seleksi, termasuk:
                </p>

                <ul>
                    <li>CPNS</li>
                    <li>PPPK</li>
                    <li>BUMN</li>
                    <li>Seleksi kerja dan ujian kompetensi lainnya</li>
                </ul>

                <p>
                    Dengan metode belajar yang terstruktur dan pengajar yang kompeten, Privat Nusantara membantu peserta mempersiapkan diri secara lebih percaya diri untuk menghadapi proses seleksi.
                </p>

            </div>

        </div>
    </section>

    <section class="about-section">
        <div class="container">

            <div class="section-heading">
                <h2>Tingkatkan Peluang Lolos dengan Persiapan yang Lebih Terarah</h2>
            </div>

            <div class="about-content">
                <div class="about-image">
                    <img src="{{ asset('images/cpns-image.webp') }}"
                         alt="Persiapan ujian CPNS bersama Privat Nusantara">
                </div>

                <div class="about-text">
                    <p>
                        Banyak peserta gagal bukan karena kurang kemampuan, tetapi karena belum memiliki strategi belajar yang sesuai dengan pola seleksi.
                    </p>

                    <p>
                        Privat Nusantara membantu peserta mempersiapkan ujian melalui pendekatan belajar yang lebih terencana. Tutor membantu mengidentifikasi kelemahan, memperkuat pemahaman materi, dan memberikan latihan yang relevan dengan kebutuhan tes.
                    </p>

                    <p>
                        Mulai dari peserta yang baru memulai persiapan hingga yang ingin meningkatkan hasil latihan, program bimbel dirancang agar proses belajar menjadi lebih fokus dan terukur.
                    </p>

                    <ul>
                        <li>Materi disesuaikan dengan kebutuhan seleksi</li>
                        <li>Tutor membantu memahami pola dan strategi pengerjaan soal</li>
                        <li>Evaluasi belajar untuk melihat perkembangan peserta</li>
                        <li>Pendampingan hingga lebih siap menghadapi ujian</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="reasons-section" id="keunggulan">
        <div class="container">

            <div class="section-heading">
                <h2>Alasan Memilih Privat Nusantara untuk Persiapan CPNS, PPPK & BUMN</h2>
            </div>

            <div class="row g-4 reasons-grid">

                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-number">01</span>
                        <div class="reason-icon">
                            <img src="wp-content/uploads/public/keunggulan/keunggulan-1.svg" alt="">
                        </div>
                        <h3>Pendampingan Belajar Sesuai Target Seleksi</h3>
                        <span class="reason-line"></span>
                        <p>Setiap peserta memiliki tujuan dan tingkat persiapan yang berbeda. Privat Nusantara membantu menyusun proses belajar yang lebih terarah agar peserta dapat fokus pada materi yang dibutuhkan untuk menghadapi seleksi CPNS, PPPK, maupun BUMN.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-number">02</span>
                        <div class="reason-icon">
                            <img src="{{ asset('images/keunggulan/keunggulan-2.svg') }}" alt="">
                        </div>
                        <h3>Pengajar dengan Pengalaman Membimbing Peserta Ujian</h3>
                        <span class="reason-line"></span>
                        <p>Kami menghadirkan tutor yang memahami kebutuhan persiapan tes dan mampu membantu peserta mempelajari materi secara lebih sistematis. Setiap sesi dirancang agar peserta tidak hanya memahami teori, tetapi juga mampu menerapkannya dalam latihan soal.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-number">03</span>
                        <div class="reason-icon">
                            <img src="{{ asset('images/keunggulan/keunggulan-3.svg') }}" alt="">
                        </div>
                        <h3>Pembelajaran Personal dan Lebih Fokus</h3>
                        <span class="reason-line"></span>
                        <p>Melalui sistem bimbel privat, peserta mendapatkan ruang belajar yang lebih nyaman untuk bertanya, berdiskusi, dan memperdalam materi yang masih belum dikuasai.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-number">04</span>
                        <div class="reason-icon">
                            <img src="{{ asset('images/keunggulan/keunggulan-4.svg') }}" alt="">
                        </div>
                        <h3>Latihan Soal dan Analisis Perkembangan</h3>
                        <span class="reason-line"></span>
                        <p>Persiapan seleksi membutuhkan latihan yang konsisten. Karena itu, peserta mendapatkan pembahasan soal dan evaluasi untuk mengetahui perkembangan kemampuan serta memperbaiki strategi belajar.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-number">05</span>
                        <div class="reason-icon">
                            <img src="{{ asset('images/keunggulan/keunggulan-5.svg') }}" alt="">
                        </div>
                        <h3>Pilihan Belajar Fleksibel Sesuai Kebutuhan</h3>
                        <span class="reason-line"></span>
                        <p>Privat Nusantara menyediakan metode pembelajaran yang dapat disesuaikan dengan aktivitas peserta, baik melalui pertemuan langsung maupun kelas online.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-number">06</span>
                        <div class="reason-icon">
                            <img src="public/images/keunggulan/keunggulan-6.svg" alt="">
                        </div>
                        <h3>Program Belajar dengan Sistem yang Praktis</h3>
                        <span class="reason-line"></span>
                        <p>Mulai dari konsultasi awal hingga proses pembelajaran, Privat Nusantara membantu peserta mendapatkan program yang sesuai dengan kebutuhan persiapan seleksi.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-number">07</span>
                        <div class="reason-icon">
                            <img src="{{ asset('images/keunggulan/keunggulan-7.svg') }}" alt="">
                        </div>
                        <h3>Tim Support yang Siap Mendampingi</h3>
                        <span class="reason-line"></span>
                        <p>Tim kami siap memberikan informasi mengenai program, pilihan tutor, sistem belajar, dan rekomendasi persiapan yang sesuai dengan target peserta.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="tutor-section">
        <div class="container">

            <div class="section-heading">
                <h2>Tutor Berpengalaman untuk Mendukung Persiapan Seleksi Anda</h2>
            </div>

            <div class="tutor-content">

                <div class="tutor-image">
                    <img src="{{ asset('images/lesson.webp') }}"
                         alt="Tutor berpengalaman Privat Nusantara">
                </div>

                <div class="tutor-text">
                    <p>
                        Memilih pendamping belajar yang tepat dapat membantu peserta memahami materi secara lebih efektif. Privat Nusantara bekerja sama dengan pengajar yang memiliki pengalaman akademik dan kemampuan mengajar sesuai bidang masing-masing.
                    </p>

                    <p>
                        Tim tutor kami terdiri dari guru berpengalaman, dosen, asisten dosen, mahasiswa berprestasi, serta alumni dari berbagai perguruan tinggi ternama seperti UI, UGM, ITB, IPB, STAN, STIS, UNJ, SSE, UIN, dan universitas unggulan lainnya.
                    </p>

                    <p>
                        Setiap pengajar melalui proses seleksi untuk memastikan kemampuan akademik dan kualitas penyampaian materi. Tutor membantu peserta memahami konsep, membahas latihan soal, serta menyusun strategi belajar yang lebih efektif.
                    </p>

                    <p>
                        Privat Nusantara membantu peserta mendapatkan bimbingan yang tepat untuk menghadapi seleksi CPNS, PPPK, dan BUMN di {region}.
                    </p>

                    <!-- <div class="tutor-highlight">
                        <i class="bi bi-mortarboard-fill"></i>
                        <p>
                            Privat Nusantara membantu peserta mendapatkan bimbingan yang tepat untuk menghadapi seleksi CPNS, PPPK, dan BUMN di {region}.
                        </p>
                    </div> -->

                     <a href="bimbelcpns.id" class="btn-cta">
                        Konsultasi Sekarang
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="product-section" id="produk">
        <div class="container">

            <div class="product-heading">
                <span class="product-label">Program Kami</span>
                <h2>Pilihan Program Les Privat Privat Nusantara</h2>
                <p>
                    Temukan program belajar yang sesuai dengan kebutuhan dan tujuan Anda
                    bersama tutor berpengalaman Privat Nusantara.
                </p>
            </div>

            <div class="row g-4 product-list">

                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/produk/16.webp') }}" alt="Program Les Privat 1">
                        <div class="product-overlay">
                            <a href="https://wa.privatnusantara.com/" class="btn-product" target="_blank">
                                Konsultasi CPNS
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-card">
                        <img src="public/images/produk/20.webp" alt="Program Les Privat 2">
                        <div class="product-overlay">
                            <a href="https://wa.privatnusantara.com/" class="btn-product" target="_blank">
                                Konsultasi PPPK
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/produk/19.webp') }}" alt="Program Les Privat 3">
                        <div class="product-overlay">
                            <a href="https://wa.privatnusantara.com/" class="btn-product" target="_blank">
                                Konsultasi BUMN
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/produk/15.webp') }}" alt="Program Les Privat 4">
                        <div class="product-overlay">
                            <a href="https://wa.privatnusantara.com/" class="btn-product" target="_blank">
                                Konsultasi Kedinasan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/produk/14.webp') }}" alt="Program Les Privat 5">
                        <div class="product-overlay">
                            <a href="https://wa.privatnusantara.com/" class="btn-product" target="_blank">
                                Konsultasi AKMIL
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/produk/13.webp') }}" alt="Program Les Privat 6">
                        <div class="product-overlay">
                            <a href="https://wa.privatnusantara.com/" class="btn-product" target="_blank">
                                Konsultasi AKPOL
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="testimonial-section">
        <div class="container">

            <div class="section-heading">
                <h2>Cerita Peserta yang Mempersiapkan Target Karier Bersama Privat Nusantara</h2>
            </div>

            <div class="row g-4 testimonial-list">

                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="{{ asset('images/testimoni-1.webp') }}" alt="Peserta Privat Nusantara">
                        </div>

                        <div class="testimonial-content">
                            <span class="testimonial-quote">&ldquo;</span>
                            <p>Sebelum mengikuti bimbingan, saya masih kesulitan memahami pola soal seleksi. Bersama tutor Privat Nusantara, saya mendapatkan arahan belajar yang lebih terstruktur dan lebih percaya diri menghadapi ujian.</p>
                            <div class="testimonial-author">
                                <h3>Angga</h3>
                                <span>Peserta Privat Nusantara</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="{{ asset('images/testimoni-2.webp') }}" alt="Peserta Privat Nusantara">
                        </div>

                        <div class="testimonial-content">
                            <span class="testimonial-quote">&ldquo;</span>
                            <p>Program belajar Privat Nusantara membantu anak saya mempersiapkan ujian dengan lebih disiplin. Materi dijelaskan dengan baik dan latihan soal membuat persiapannya semakin matang.</p>
                            <div class="testimonial-author">
                                <h3>Bapak Edo</h3>
                                <span>Orang Tua Peserta</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-image">
                            <img src="{{ asset('images/testimoni-3.webp') }}" alt="Peserta Privat Nusantara">
                        </div>

                        <div class="testimonial-content">
                            <span class="testimonial-quote">&ldquo;</span>
                            <p>Metode belajar yang diberikan tutor sangat membantu. Pembahasan soal menjadi lebih mudah dipahami dan saya jadi mengetahui strategi yang tepat dalam menghadapi tes.</p>
                            <div class="testimonial-author">
                                <h3>Niko</h3>
                                <span>Peserta Privat Nusantara</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="career-section">
        <div class="container">
            <div class="career-content">

                <span class="career-label">Persiapan Karier</span>

                <h2>Persiapkan Masa Depan Karier dengan Bimbingan yang Tepat</h2>

                <p>
                    Seleksi CPNS, PPPK, dan BUMN menjadi kesempatan besar bagi banyak peserta untuk membangun karier. Namun, persaingan yang tinggi membuat persiapan yang matang menjadi hal penting.
                </p>

                <p>
                    Privat Nusantara menghadirkan layanan <strong>bimbel {region}</strong> untuk membantu peserta memahami materi seleksi, meningkatkan kemampuan mengerjakan soal, serta belajar dengan strategi yang lebih terarah.
                </p>

                <div class="career-highlight">
                    <p>
                        Dengan dukungan tutor berpengalaman dan pilihan pembelajaran fleksibel, peserta dapat mempersiapkan diri sesuai target tanpa harus terbatas oleh waktu dan lokasi.
                    </p>

                    <p>
                        Baik melalui <strong>bimbel ke rumah {region}</strong> maupun kelas online, Privat Nusantara siap mendampingi proses belajar Anda agar lebih fokus dan optimal.
                    </p>
                </div>

                <p class="career-closing">
                    Mulai persiapan lebih awal dan tingkatkan kesiapan menghadapi seleksi CPNS, PPPK, dan BUMN bersama Privat Nusantara.
                </p>

            </div>
        </div>
    </section>

    <section class="region-section">
        <div class="container">
            <div class="region-heading">
                <span class="region-label">Jangkauan Layanan</span>
                <h2>Layanan Les Privat CPNS di Berbagai Kota di Indonesia</h2><!-- 
                <p>
                    Privat Nusantara menyediakan layanan Les Privat CPNS di berbagai kota di Indonesia.
                    Peserta dapat berkonsultasi mengenai ketersediaan tutor, metode pembelajaran,
                    dan pilihan program persiapan CPNS di wilayah masing-masing.
                </p> -->
            </div>

            <div class="region-list">
                <a href="bimbelcpns.id" class="region-item">
                    Jakarta
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Bandung
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Surabaya
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Medan
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Semarang
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Makassar
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Palembang
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Pekanbaru
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Bekasi
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Malang
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Solo
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Batam
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Balikpapan
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Bontang
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Kutai Kartanegara
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Kediri
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Sidoarjo
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Gresik
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Banyuwangi
                </a>
                <a href="bimbelcpns.id" class="region-item">
                    Cilegon
                </a>
            </div>
        </div>
    </section>

    <section class="faq-section" id="faq">
        <div class="container">
            <div class="row g-5 align-items-start">

                <!-- KOLOM KIRI -->
                <div class="col-lg-5">
                    <div class="faq-intro">
                        <span class="faq-label">FAQ</span>

                        <h2>Pertanyaan Seputar Program Bimbel CPNS, PPPK & BUMN Privat Nusantara</h2>

                        <p>
                            Masih memiliki pertanyaan seputar program bimbel Privat Nusantara? Temukan informasi mengenai pilihan program, metode belajar, materi, biaya, hingga proses pendaftaran melalui daftar pertanyaan berikut.
                        </p>

                        <div class="faq-image">
                            <img src="{{ asset('images/image-faq.webp') }}" alt="Bimbingan belajar Privat Nusantara">
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN -->
                <div class="col-lg-7">
                    <div class="accordion faq-list" id="faqAccordion">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                                    Apa saja program bimbel yang tersedia di Privat Nusantara?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Privat Nusantara menyediakan program <strong>bimbel {region}</strong> untuk membantu peserta mempersiapkan berbagai seleksi seperti CPNS, PPPK, dan BUMN. Program belajar dirancang untuk membantu peserta memahami materi, meningkatkan kemampuan mengerjakan soal, serta mempersiapkan diri menghadapi ujian.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Apakah tersedia bimbel ke rumah dan online?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya. Peserta dapat memilih layanan <strong>bimbel ke rumah {region}</strong> dengan tutor yang datang langsung atau mengikuti pembelajaran online melalui Zoom/Google Meet. Metode belajar dapat disesuaikan dengan kebutuhan dan kondisi peserta.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Materi apa saja yang dipelajari dalam program bimbel?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Materi pembelajaran disesuaikan dengan jenis seleksi yang dipersiapkan. Peserta mendapatkan pendampingan untuk memahami konsep, membahas latihan soal, serta mempelajari strategi pengerjaan agar lebih siap menghadapi ujian.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Bagaimana cara memilih program bimbel yang sesuai?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tim Privat Nusantara akan membantu menentukan program berdasarkan target seleksi, tingkat persiapan peserta, kebutuhan materi, serta metode belajar yang paling sesuai.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Apakah bisa konsultasi sebelum mendaftar?
                                </button>
                            </h3>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tentu. Kami menyediakan konsultasi gratis untuk membantu peserta memahami program yang tersedia dan mendapatkan rekomendasi pembelajaran sesuai tujuan seleksi.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                    Apakah jadwal belajar dapat disesuaikan?
                                </button>
                            </h3>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Bisa. Jadwal pembelajaran dapat diatur secara fleksibel berdasarkan kesepakatan antara peserta dan tutor agar proses belajar tetap nyaman dilakukan di tengah aktivitas lainnya.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                    Berapa biaya program bimbel CPNS, PPPK, dan BUMN?
                                </button>
                            </h3>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Biaya program menyesuaikan kebutuhan peserta, seperti jumlah pertemuan, metode pembelajaran, dan program yang dipilih. Hubungi tim Privat Nusantara untuk mendapatkan informasi paket yang sesuai.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                    Apakah tersedia latihan soal untuk persiapan seleksi?
                                </button>
                            </h3>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya. Program bimbel mencakup latihan dan pembahasan soal untuk membantu peserta memahami pola ujian, meningkatkan kecepatan pengerjaan, serta mengevaluasi kemampuan secara berkala.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                                    Bagaimana perkembangan belajar peserta dipantau?
                                </button>
                            </h3>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tutor membantu melihat perkembangan peserta melalui proses evaluasi dan pembahasan hasil latihan. Hal ini membantu menentukan materi yang masih perlu diperkuat sebelum menghadapi seleksi.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                                    Apakah tutor dapat datang langsung ke lokasi peserta?
                                </button>
                            </h3>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya. Layanan <strong>bimbel ke rumah {region}</strong> tersedia bagi peserta yang membutuhkan pendampingan tatap muka bersama tutor secara lebih personal.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11">
                                    Bagaimana cara mendaftar program bimbel Privat Nusantara?
                                </button>
                            </h3>
                            <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Hubungi tim Privat Nusantara untuk melakukan konsultasi awal. Kami akan membantu menentukan kebutuhan belajar, memilih program yang tepat, serta mengatur jadwal pembelajaran bersama tutor.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="final-section">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-5">
                    <div class="final-image">
                        <img src="{{ asset('images/final.png') }}" alt="Kegiatan pembelajaran Privat Nusantara">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="final-content">

                        <span class="final-label">Mulai Persiapan Anda</span>

                        <h2>Mulai Persiapan CPNS, PPPK & BUMN Bersama Privat Nusantara</h2>

                        <p>
                            Mempersiapkan seleksi CPNS, PPPK, dan BUMN membutuhkan strategi belajar yang tepat serta pendampingan yang konsisten. Privat Nusantara hadir melalui layanan <strong>bimbel {region}</strong> untuk membantu peserta belajar lebih fokus dan terarah.
                        </p>

                        <p>
                            Dengan dukungan tutor berpengalaman, peserta dapat memahami materi seleksi, meningkatkan kemampuan analisis soal, serta mendapatkan arahan belajar sesuai target yang ingin dicapai.
                        </p>

                        <p>
                            Tersedia pilihan <strong>bimbel ke rumah {region}</strong> maupun pembelajaran online yang memberikan fleksibilitas bagi peserta dengan berbagai kondisi dan kesibukan.
                        </p>

                        <p>
                            Privat Nusantara membantu Anda membangun persiapan yang lebih matang melalui metode belajar personal, latihan terstruktur, dan evaluasi perkembangan secara berkala.
                        </p>

                        <p class="final-closing">
                            Mulai langkah persiapan Anda sekarang dan dapatkan pendampingan terbaik untuk menghadapi seleksi CPNS, PPPK, dan BUMN.
                        </p>

                        <a href="#kontak" class="btn-final">
                            Konsultasi Sekarang
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">

            <div class="footer-main">

                <!-- Kiri: Profil -->
                <div class="footer-about">
                    <a href="#beranda" class="footer-logo">
                        <img src="{{ asset('images/logo-privat-nusantara-web.webp') }}" alt="Privat Nusantara">
                    </a>

                    <p>
                        <strong>Privat Nusantara</strong> menyediakan layanan les privat
                        dengan program belajar yang disesuaikan dengan kebutuhan, tingkat
                        kemampuan, dan tujuan peserta. Didukung pendampingan guru, kami
                        membantu proses belajar menjadi lebih terarah dan fleksibel.
                    </p>
                </div>

                <!-- Tengah: Alamat -->
                <div class="footer-address">
                    <h3>Alamat Kantor Privat Nusantara</h3>
                    <h4>Depok</h4>
                    <p>
                        Jl. Kukusan Raya No.10D, RT.5/RW.2, Kukusan,
                        Kecamatan Beji, Kota Depok, Jawa Barat 16425
                    </p>
                </div>

                <!-- Kanan: Produk -->
                <div class="footer-products">
                    <h3>Produk Privat Nusantara</h3>

                    <ul class="footer-product-list">
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Calistung">Calistung</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20SD">SD</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20SMP">SMP</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20SMA">SMA</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20TKA">TKA</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20OSN%20/%20IMO">OSN / IMO</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Bahasa%20Asing">Bahasa Asing</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20UTBK">UTBK</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20UMPTN">UMPTN</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20UMPTKIN">UMPTKIN</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Kedokteran">Kedokteran</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Toefl,%20Toafl,%20IELTS">Toefl, Toafl, IELTS</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Mahasiswa">Mahasiswa</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20BIPA">BIPA</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Akmil">Akmil</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Akpol">Akpol</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Kedinasan">Kedinasan</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20CPNS">CPNS</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20PPPK">PPPK</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20BUMN">BUMN</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20LPDP">LPDP</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20ABK%20/%20Inklusi">ABK / Inklusi</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Mengaji">Mengaji</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Coding">Coding</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Robotik">Robotik</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Sempoa">Sempoa</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Privat%20Komputer">Komputer</a></li>
                        <li><a href="https://bimbelcpns.id/?kebutuhan=Les%20Sesuai%20Kebutuhan">Les Sesuai Kebutuhan</a></li>
                    </ul>
                </div>

            </div>

            <!-- Footer bawah -->
            <div class="footer-bottom">
                <p>
                    <span class="copyright-icon">&copy;</span>
                    bimbelcpns.id
                </p>
            </div>

        </div>
    </footer>
<a href="https://wa.privatnusantara.com/"
   class="wa-floating"
   target="_blank"
   rel="noopener"
   aria-label="Hubungi kami melalui WhatsApp">
    <i class="bi bi-whatsapp"></i>
    <span>Hubungi Kami</span>
</a>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
