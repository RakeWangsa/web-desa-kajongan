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

    <title>artikel</title>
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

    <section>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg me-auto nav-cont">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/assets/pekalongan.png') }}" style="width: 40px;" />
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
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="/#tentang">Tentang</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="/#fasilitas">Fasilitas</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="/#struktur" tabindex="-1" aria-disabled="true">Struktur</a>
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
    </section>

    <section class="article-container">
        <div class="">
            <div class="row" style="margin: 0%">
                <div class="col-lg-2" style="background-color: #F5F5F5; padding:0%">
    
                </div>
                <div class="col-lg-8" style="padding: 20px">
                   <h2>{{ $artikel_data["title"] }}</h2>
                   <p>{{ $artikel_data["created_at"] }}</p>
                   <h6 style="font-weight: normal">Penulis : {{ $artikel_data["author"] }}</h6>
                   <img src="{{ asset("/assets/artikelImage/".$artikel_data['thumbnail']) }}" width="70%" height="" style="padding: 30px"/>
                   <div class="content-art">
                    <p>
                        {!! str_replace("\\","",str_ireplace("div","p",str_ireplace('"',' ', $artikel_data["article"])) ) !!}
                    </p>
                   </div>
                </div>
                <div class="col-lg-2" style="background-color: #F5F5F5; padding:0%">
    
                </div>
            </div>
        </div>

        <div class="footer-cont">
            <div class="row" style="margin: 0%">
                <div class="col-lg-12" style="padding: 0%;display:flex;flex-direction:column;align-items:center">
                    <img src={{ asset("./assets/pekalongan.png") }} style="width: 60px;margin-bottom:12px" />
                    Desa Kajongan ,Kajen Pekalongan
                </div>
                <div class="col-lg-12" style="padding: 0%;display:flex;flex-direction:column;align-items:center">
                    <h6>Ikuti Kegiatan selengkapnya di sosial media kami.</h6>
                    <div style="padding: 0%;display:flex;flex-direction:row;align-items:flex-end">
                        <a href="https://www.instagram.com/pemdes_kajongan/">
                            <img src={{ asset("./assets/insta-2.png") }} style="width: 30px;margin-right:10px" />
                        </a>
                        <a href="https://www.facebook.com/pemdes.kajongan.9/">
                            <img src={{ asset("./assets/facebook-2.png") }} style="width: 30px;" />
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


</body>

</html>