<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Desa Kajongan</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Tambahkan script Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            height: 650px;
        }
    </style>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <section class="landing-page">
        <nav class="navbar navbar-expand-lg navbar-dark me-auto nav-cont">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./assets/pekalongan.png" style="width: 40px;" />
                    <b>Kajongan</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <b>
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#tentang">Tentang</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#fasilitas">Fasilitas</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#struktur" tabindex="-1" aria-disabled="true">Struktur</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="/artikel" aria-current="page" aria-disabled="true">Artikel</a>
                            </b>
                        </li>
                    </ul>
                </div>
        </nav>

        <div class="home-section">
            <div class="title-home">
                <h1>Desa Kajongan</h1>
                <h3>Kajen, Pekalongan</h3>
                <p>Pesona Alam Tanpa Batas: Keberagaman Desa yang Mempesona</p>
            </div>
            <a href="/artikel"><button class="btn">Telusuri</button></a>
        </div>

    </section>

    <div class="" id="tentang">
        <div class="col-lg-12 about-1">
            <h1>- Tentang Kajongan -</h1>
        </div>
        <div class="container-content">
            <div class="row">
                <div class="col-lg-4 col-sm-5 card-container" data-bs-toggle="modal" data-bs-target="#profileModal">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/desa-top.png" class="card-img">
                        <div class="card-body">
                            <h2>Profile</h2>
                            <p class="card-text">Desa Kajongan Merupakan desa dengan penuh keindahan alam, 
                                desa ini terletak di kecamatan kajen pada kabupaten pekalongan</p>
                        </div>
                    </div>
                </div>
 
                <!-- Modal -->
                <div class="modal fade bd-example-modal-xl" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Profile Desa Kajongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-5">
                                <img src="./assets/desa-top.png" class="card-img-top">
                            </div>
                            <div class="col-lg-7">
                                <p class="card-text">
                                    Desa Kajongan Merupakan desa dengan penuh keindahan alam, 
                                    desa ini terletak di kecamatan kajen pada kabupaten pekalongan
                                    desa Kajongan sendiri memiliki banyak keunikan dan juga tradisi yang biasa dilakukan 
                                    seperti acara malam suro dimana para penduduk desa berkeliling desa menyalakan obor
                                    untuk menggalang dana, acara karnaval 17 agustus yang meriah, dsb. 
                                    adapun pusat pemerintahan desa berletak pada dusun krajan yang terletak di balai desa.
                                </p>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container col-sm-5" data-bs-toggle="modal" data-bs-target="#UMKMModal">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/koveksi.png" class="card-img">
                        <div class="card-body"> 
                            <h2>UMKM</h2>
                            <p class="card-text">
                                Desa Kajongan merupakan desa yang sudah cukup berkembang dari
                                 segi variasi UMKM yang disediakan. 
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-xl" id="UMKMModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UMKM Desa Kajongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-5">
                                <img src="./assets/koveksi.png" class="card-img-top">
                            </div>
                            <div class="col-lg-7">
                                <p class="card-text">
                                    Desa Kajongan merupakan desa yang sudah cukup berkembang dari
                                    segi variasi UMKM yang disediakan. Desa Kajongan memiliki industri konveksi yang kuat dimana
                                    sebagian besar pemuda desa kajongan bekerja di industri ini. Selain industri Konveksi Desa
                                    Kajongan juga memiliki beberapa industri lain nya seperti industri buah kelapa, UMKM penjualan jasa makanan
                                    dan juga warung, UMKM pembuatan susu kedelai, dan juga jasa pembuatan bungkus makanan menggunakan bambu. 
                                    desa Kajongan juga mulai melakukan transformasi UMKM yang dimiliki untuk masuk ke ranah digital untuk memperluas
                                    pangsa pasar dari UMKM yang dimiliki.</p>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container " data-bs-toggle="modal" data-bs-target="#LocationModal">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/peta-kajongan.png" class="card-img">
                        <div class="card-body">
                            <h2>Lokasi</h2>
                            <p class="card-text">desa Kajongan terletak di Kecamatan Kajen kabupaten pekalongan provinsi jawa tengah, 
                                yang secara geografis berada di bagian utara Pulau Jawa</p>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-xl" id="LocationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lokasi Desa Kajongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-5">
                                <img src="./assets/peta-kajongan.png" class="card-img-top">
                            </div>
                            <div class="col-lg-7">
                                <p class="card-text">
                                    desa Kajongan terletak di Kecamatan Kajen kabupaten pekalongan provinsi jawa tengah, 
                                    yang secara geografis berada di bagian utara Pulau Jawa dengan Koordinat 7 07'35.9"s LS
                                    dan 109 37'51.9"E BT. Desa ini terletak di dataran rendah dan terletak sekitar 10 kilometer
                                    di sebelah timur kota pekalongan yang dikelilingi oleh beberapa desa lainnya. seperti Desa 
                                    Sinangoh Prendeng di sebelah timur, Desa Pringsurat di sebelah timur, Desa Brengkolan di sebelah seletan, dan Desa  Pekiringan Ageng 
                                    di sebelah barat. 
                                </p>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators-2" class="carousel slide perangkat-desa" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner" id="struktur">

            <div class="carousel-item active about-page-item">
                <div class="col-lg-12 about-1">
                    <h1>Perangkat Desa</h1>
                </div>
                <div class="container-per-1">
                    <div class="row">
                        <div class="col-lg-12 perangkat-content">
                            <img src="./assets/perangkat/perangkat-desa.png" class="perangkat-img-1" alt="">
                        </div>
                        <div class="col-lg-12 periode">
                            <p>Perangkat Desa Kajongan Periode 2019-2025</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item about-page-item-2">
                <div class="col-lg-12 about-2">
                    <h1>Detail Perangkat Desa</h1>
                </div>
                <div class="container-content-2">
                    <div class="row container">
                        <div class="col-lg-12 perangkat-item col-sm-12">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kades }}" alt="" class="per-desa-img"110px" height="110px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h4>{{ $kades_name }}</h4>
                                    <p>Kepala Desa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_sekre }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $sekre_name }}
                                    </h6>
                                    <p>Sekretaris Desa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kaurUang }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kaurUang_name }}</h6>
                                    <p>Kaur Keuangan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kaurUmum }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kaurUmum_name }}</h6>
                                    <p>Kaur Umum & Perencanaan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kasiPemerintah }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kasiPemerintah_name }}</h6>
                                    <p>Kasi Pemerintahan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kasiSejahtera }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kasiSejahtera_name }}</h6>
                                    <p>Kasi Kesejahteraan & Pelayanan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kadusKemloko }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kadusKemloko_name }}
                                    </h6>
                                    <p>Kadus Kemloko</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kadusKrajen }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kadusKrajen_name }}</h6>
                                    <p>Kadus Krajan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item col-6">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kadusGembongan }}" alt="" class="per-desa-img"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kadusGembongan_name }}</h6>
                                    <p>Kadus Gembongan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 periode">
                            <p>Detail Perangkat Desa Kajongan Periode 2019-2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-2"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-2"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container-fasilitas" id="fasilitas">
        <div class="col-lg-12 about-1">
            <h1>- Fasilitas Desa -</h1>
        </div>
        <div class="container-content">
            <div class="row">
                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/lap-bol.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Lapangan</h3>
                            <p class="card-text">Lapangan yang biasa digunakkan untuk pertandingan sepak bola</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/masjid.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Masjid</h3>
                            <p class="card-text">Masjid Jami Baitusalam, merupakan Masjid terbesar di desa kajongan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/sungai2.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Sungai</h3>
                            <p class="card-text">Sungai kajongan merupakan salah satu sumber mata air desa kajongan dan juga tempat bermain untuk anak-anak.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/SD-kajongan.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Sekolah Dasar</h3>
                            <p class="card-text">Sekolah Dasar Kajongan, merupakan satu-satunya SD di desa kajongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/TPQ.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>TPQ</h3>
                            <p class="card-text">Tepeq desa kajongan merupakan tempat dilakukannya pengajian.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/petilasan.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Petilasan</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/balai-desa.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch"  style="height: 25ch">
                            <h3>Balai Desa</h3>
                            <p class="card-text">Merupakan Tempat Bekerjanya Perangkat Desa dan juga tempat diadakan nya
                                pertemuan besar di desa kajongan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container col-6">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/sungai2.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Pondok Pesantren</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mb-4">
            <div class="col-lg-12 about-1 mb-4">
                <h1>- Peta Desa -</h1>
            </div>
            <div class="card info-card" style="border-radius:20px;box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);">
                <div class="card-body">
                    <div id="map" class="mt-4" style="border-radius:20px"></div>
                    {{-- <p id="lokasi" style="display: none"></p> --}}
                </div>
            </div>
        </div>

        <div class="footer-cont">
            <div class="row" style="margin: 0%">
                <div class="col-lg-12" style="padding: 0%;display:flex;flex-direction:column;align-items:center">
                    <img src="./assets/pekalongan.png" style="width: 60px;margin-bottom:12px" />
                    Desa Kajongan ,Kajen Pekalongan
                </div>
                <div class="col-lg-12" style="padding: 0%;display:flex;flex-direction:column;align-items:center">
                    <h6>Ikuti Kegiatan selengkapnya di sosial media kami.</h6>
                    <div style="padding: 0%;display:flex;flex-direction:row;align-items:flex-end">
                        <a href="https://www.instagram.com/pemdes_kajongan/">
                            <img src="./assets/insta-2.png" style="width: 30px;margin-right:10px" />
                        </a>
                        <a href="https://www.facebook.com/pemdes.kajongan.9/">
                            <img src="./assets/facebook-2.png" style="width: 30px;" />
                        </a>
                    </div>
                </div>
                <br>
                <div class="col-lg-12" style="text-align: center; padding: 0%;">
                    <p style="margin: 0;margin-top:12px"><b>Pemdes Kajongan</b> © 2023-2024</p>
                    <p>Made with Love by KKN Undip TIM II 2023</p>
                </div>
            </div>
        </div>
    </section>


    
    <script>
        function tampilkanPosisi(posisi) {
            var latitude = -7.051878493315458;
            var longitude = 109.58420467535026;
    
            // Tambahkan peta Leaflet
            var map = L.map('map').setView([latitude, longitude], 15);
    
            // Tambahkan layer peta dari OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
    
            // Membuat ikon kustom merah
            var redIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });
    
            // koordinat kantor
            var kantorCoords1 = [-7.054084729493203, 109.58489727588355]; //koordinat farmtech
            var kantorCoords2 = [-7.05683747400653, 109.58692027784949]; //koordinat farmhill
            var kantorCoords3 = [-7.05783747400653, 109.59692027784949]; //koordinat tes
    
            // Marker untuk Farmtech
            var markerFarmtech = L.marker(kantorCoords1, { icon: redIcon }).addTo(map);
            markerFarmtech.bindPopup('Farmtech', { autoClose: false }).openPopup();
    
            // Marker untuk Farmhill
            var markerFarmhill = L.marker(kantorCoords2, { icon: redIcon }).addTo(map);
            markerFarmhill.bindPopup('Farmhill', { autoClose: false }).openPopup();
    
            // Marker untuk Farmhill
            var markerTes = L.marker(kantorCoords3, { icon: redIcon }).addTo(map);
            markerTes.bindPopup('Tes', { autoClose: false }).openPopup();
        }
    
        // Panggil fungsi saat halaman dimuat
        window.onload = tampilkanPosisi;
    </script>
    
    
    
    
    
</body>

</html>