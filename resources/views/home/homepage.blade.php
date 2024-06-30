<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile DLB</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <div class="logo-container">
                    <img src="{{ asset('images/logotech.png') }}" alt="Company Logo" class="logo">
                </div>
                <li><a href="#home">Layanan</a></li>
                <li><a href="#about">Portfolio</a></li>
                <li><a href="#services">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li class="social-icons">
                    <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="" class="logoicon"></a>
                    <a href="#"><img src="{{ asset('images/twitter.png') }}" alt=""class="logoicon"></a>
                    <a href="#"><img src="{{ asset('images/instagram.png') }}" alt=""class="logoicon"></a>
                    <a href="#"><img src="{{ asset('images/whatsapp.png') }}" alt=""class="logoicon"></a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Home Section 1 -->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <img src="{{ asset('images/BG.png') }}" alt="Image" class="img-fluid rounded border">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ asset('images/kaki.png') }}" alt="Image" class="logo-kaki">
                <div class="image-text2">
                    <div class="image-text">
                        <p>Mitra Terbaik untuk</p>
                        <p>Transformasi Digital</p>
                        <p>Anda</p>
                        <p style="color: white; font-family: Arial; font-size: 20px; font-weight: normal">Maju bersama
                            perkembangan zaman bersama kami! Kami lengkapi</p>
                        <p style="color: white; font-family: Arial; font-size: 20px; font-weight: normal">bisnis Anda
                            dengan aplikasi cerdas untuk meraih kesuksesan masa</p>
                        <p style="color: white; font-family: Arial; font-size: 20px; font-weight: normal">depan. Hubungi
                            kami segera untuk mendapatkan layanan terbaik kami demi</p>
                        <p style="color: white; font-family: Arial; font-size: 20px; font-weight: normal">kemajuan
                            bisnis Anda.</p>
                    </div>
                    <button class="hubungi-kami">Hubungi Kami</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Home Section Layanan Kami -->
    <div class="row">
        <img src="{{ asset('images/gedungputih.png') }}" alt="Image" class="imagegedungputih">
        <section class="layanankami">
            <p class="layanan-kami">Layanan Kami</p>
            <p class="sub-bab">Kami berkomitmen untuk mewujudkan impian digital anda dengan menyediakan</p>
            <p class="sub-bab">layanan pengembangan software berkualitas tinggi.</p>
            <div class="container">
                <div class="card">
                    <img src="{{ asset('images/carduiux.png') }}" alt="UI/UX Design">
                    <h1>Desain UI/UX</h1>
                    <p>DlbforTech memiliki tim desain yang berpengalaman dalam menciptakan antarmuka pengguna (UI)
                        yang menarik dan ramah pengguna (UX) untuk aplikasi dan situs web. Desain kami fokus pada
                        kegunaan, estetika, dan pengalaman pengguna yang memuaskan.</p>
                    <a href="#" class="button">Lihat Selengkapnya</a>
                </div>
                <div class="card">
                    <img src="{{ asset('images/cardpsw.png') }}" alt="Pengembangan Situs Web">
                    <h1>Pengembangan Situs Web</h1>
                    <p>DLBforTech menawarkan layanan pengembangan situs web yang
                        responsif dan profesional melalui
                        pendekatan yang
                        berorientasi pada
                        kualitas dan kepuasan pelanggan.</p>
                    <a href="#" class="button">Lihat Selengkapnya</a>
                </div>
                <div class="card">
                    <img src="{{ asset('images/cardam.png') }}" alt="Pengembangan Aplikasi Mobile">
                    <h1>Pengembangan Aplikasi Mobile</h1>
                    <p>Kami menyediakan layanan
                        pengembangan aplikasi mobile untuk
                        platform Android dan iOS.
                        Tim pengembangan kami menggunakan
                        teknologi terkini untuk menciptakan
                        aplikasi mobile yang responsif,
                        berkinerja tinggi, dan sesuai dengan
                        kebutuhan bisnispengguna.</p>
                    <a href="#" class="button">Lihat Selengkapnya</a>
                </div>
                <div class="card">
                    <img src="{{ asset('images/cardsi.png') }}" alt="Sistem Informasi">
                    <h1>Sistem Informasi</h1>
                    <p>Kami menyediakan layanan
                        pengembangan aplikasi mobile untuk
                        platform Android dan iOS.
                        Tim pengembangan kami menggunakan
                        teknologi terkini untuk menciptakan
                        aplikasi mobile yang responsif,
                        berkinerja tinggi, dan sesuai dengan
                        kebutuhan bisnispengguna.</p>
                    <a href="#" class="button">Lihat Selengkapnya</a>
                </div>
            </div>
        </section>
    </div>
    </div>

    <!-- Home Section 3 -->
    <div class="container3">
        <div class="list-client">
            <h1>0</h1>
            <p>Klien</p>
        </div>
        <div class="list-client">
            <h1>0</h1>
            <p>Projek</p>
        </div>
        <div class="list-client">
            <h1>0</h1>
            <p>Masalah Terpecahkan</p>
        </div>
        <div class="list-client">
            <h1>0</h1>
            <p>Tahun Berjalan</p>
        </div>
    </div>

    <!-- Home Section 4 -->
    <div class="container4">
        <div class="choose-us">
            <img src="{{ asset('images/kaki.png') }}" alt="">
            <div class="text">
                <h1>Mengapa Memilih <span>Kami?</span></h1>
                <p>Kami Menjaga Berbagai Aspek Yang Dapat</span> <br> Berpengaruh Pada Penilaian Klien</p>
            </div>
        </div>
    </div>
    <div class="container4a">
        <div class="choose-me">
            <img src="{{ asset('images/terjangkau.png') }}" alt="">
            <h1>Terjangkau</h1>
            <p>Dengan biaya yang terjangkau namun tetap memberikan kualitas terbaik.</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/kualitas.png') }}" alt="">
            <h1>Kualitas</h1>
            <p>Kami berkomitmen untuk memberikan produk dan layanan berkualitas tinggi serta menghasilkan solusi yang
                memenuhi standar kualitas tertinggi</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/inovasi.png') }}" alt="">
            <h1>Inovasi</h1>
            <p>DLBforTech berkomitmen untuk inovasi dan kreativitas dalam meningkatkan efisiensi dan efektivitas solusi
                teknologi informasi</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/kemitraan.png') }}" alt="">
            <h1>Kemitraan</h1>
            <p>DLBforTech berkomitmen menjadi mitra strategis jangka panjang untuk membantu pelanggan mencapai tujuan
                bisnis dengan teknologi</p>
        </div>
        <div class="choose-me">
            <img src="{{ asset('images/komitmen.png') }}" alt="">
            <h1>Komitmen</h1>
            <p>Kepuasan pelanggan adalah prioritas DLBforTech, dengan fokus pada pemenuhan kebutuhan dan dukungan purna
                jual berkualitas</p>
        </div>
    </div>
    <!-- Home Section 5 -->
    <div class="container5">
        <h1>Klien Kami</h1>
        <p>Kami Menjaga Berbagai Aspek Yang Dapat</p>
        <p>Berpengaruh Pada Penilaian Klien</p>
    </div>
    <div class="logos">
        <div class="logos-slide">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
            <img src="{{ asset('images/logo_tech.png') }} " class="logo_tech">
            <img src="{{ asset('images/logo_tech1.png') }}" class="logo_tech">
        </div>
    </div>

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector('.logos').appendChild(copy);
    </script>

    <!-- Home Section 6 -->
    <div class="portfolio">
        <h1>Portfolio</h1>
    </div>
    <div class="wrapper">
        <div class="image">
            <img src="{{ asset('images/dlbcoffeshop.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
        <div class="image">
            <img src="{{ asset('images/dlbstressapp.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
        <div class="image">
            <img src="{{ asset('images/dlbmenu.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
        <div class="image">
            <img src="{{ asset('images/dlbpresensi.png') }}">
            <div class="content">
                <h1>Image Hover Effect</h1>
                <p>Ini Hover</p>
            </div>
        </div>
    </div>
    <div class="buttonportfolio">
        <a href="#" class="button-portfolio">Lihat Selengkapnya</a>
    </div>

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact-content">
            <div class="contact-info">
                <h1>Hubungi Kami</h1>
                <p>Maju bersama perkembangan zaman bersama kami! Kami lengkapi bisnis Anda dengan aplikasi cerdas untuk
                    meraih kesuksesan masa depan. Hubungi kami segera untuk mendapatkan layanan terbaik demi kemajuan
                    bisnis Anda.</p>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <div class="form-item">
                        <input type="text" id="name" name="name" placeholder="Nama" required>
                    </div>
                    <div class="form-item">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-item">
                        <input type="text" id="notelepon" name="notelepon" placeholder="No.Telepon" required>
                    </div>
                    <div class="form-item">
                        <input type="text" id="namaperusahaan" name="namaperusahaan"
                            placeholder="Nama Perusahaan" required>
                    </div>
                </div>
                <textarea id="message" name="message" placeholder="Pesan" required></textarea>
                <div class="button-container">
                    <button type="submit">Kirim Pesan</button>
                </div>
            </form>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <div class="footer1">
        <img src="{{ asset('images/Gedungabu1.png') }}" alt="" class="footerimg">
    </div>
    <div class="footer">
        <img src="{{ asset('images/kaki.png') }}" alt="">
        <div>
            <h1>DLBforTech</h1>
            <p>Jalan DS Kalimanjung, Tlogo, Ambarketawang, Kec. Gamping,</p>
            <p>Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294</p>
            <p>Telp. +6283163950225</p>
            <p>Email : bersamadualangkah@gmail.com</p>
        </div>
    </div>
    <div class="footer-icons">
        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="footericon">
        <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="footericon">
        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="footericon">
        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="footericon">
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
