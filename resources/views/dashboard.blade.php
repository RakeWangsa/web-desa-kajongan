<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard web desa Kajongan</title>
    

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Dashboard Kajongan</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit"  class="nav-link px-3 btn btn-danger">Log out</button>
            </form>
        </div>
    </div>
    </header>

    <div class="container-fluid">
    <div class="row">
        @include('sidebar.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="row">
                <div class="col-lg-5 perangkat-data-cont shadow">
                    <h2>Kepala Desa</h2>
                    <form action="/perangkat-data/kepala" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kepala Desa</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div name="kades" id="kades" class="form-text">Masukkan Nama Kepala Desa</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" id="formFile" name="photo_url">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-6 perangkat-data-cont shadow">
                    <h2>Sekretaris Desa</h2>
                    <form action="/perangkat-data/sekre" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Sekretaris</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Sekretaris Desa</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" id="formFile" name="photo_url">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-5 perangkat-data-cont shadow">
                    <h2>Kaur Keuangan</h2>
                    <form action="/perangkat-data/kaurUang" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kaur Keuangan</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Kaur Keuangan</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input name="photo_url" class="form-control" type="file" id="formFile">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-6 perangkat-data-cont shadow">
                    <h2>Kaur Umum & Perencanaan</h2>
                    <form action="/perangkat-data/kaurUmum" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kaur Umum & Perencanaan</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Kaur Umum & Perencanaan</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input name="photo_url" class="form-control" type="file" id="formFile">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-5 perangkat-data-cont shadow">
                    <h2>Kasi Pemerintahan</h2>
                    <form action="/perangkat-data/kasiPemerintah" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kasi Pemerintahan</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Kasi Pemerintahan</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input name="photo_url" class="form-control" type="file" id="formFile">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-6 perangkat-data-cont shadow">
                    <h2>Kasi Kesejahteraan & Pelayanan</h2>
                    <form action="/perangkat-data/kasiSejahtera" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kasi Kesejahteraan & Pelayanan</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Kasi Kesejahteraan & Pelayanan</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input name="photo_url" class="form-control" type="file" id="formFile">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-5 perangkat-data-cont shadow">
                    <h2>Kadus Kemloko</h2>
                    <form action="/perangkat-data/kadusKemloko" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kadus Kemloko</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Kadus Kemloko</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input name="photo_url" class="form-control" type="file" id="formFile">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-6 perangkat-data-cont shadow">
                    <h2>Kadus Krajan</h2>
                    <form action="/perangkat-data/kadusKrajen" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kadus Krajan</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Kadus Krajan</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input name="photo_url" class="form-control" type="file" id="formFile">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>

                <div class="col-lg-5 perangkat-data-cont shadow">
                    <h2>Kadus Gembongan</h2>
                    <form action="/perangkat-data/kadusGembongan" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kadus Gembongan</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Masukkan Nama Kadus Gembongan</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input name="photo_url" class="form-control" type="file" id="formFile">
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>      
                </div>
            </div>
            <hr class="hr" />
            <p style="margin: 0;margin-top:12px"><b>Pemdes Kajongan</b> © 2023-2024</p>
            <p>Made with Love by KKN Undip TIM II 2023</p>
        </main>
        

        {{-- <div class="ms-sm-auto col-lg-9 perangkat-data-cont shadow">
            <h2>Kepala Desa</h2>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>      
        </div>

        <div class="ms-sm-auto col-lg-9 perangkat-data-cont shadow">
            <h2>Kepala Desa</h2>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>      
        </div>

        <div class="ms-sm-auto col-lg-9 perangkat-data-cont shadow">
            <h2>Kepala Desa</h2>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>      
        </div> --}}

        

    </div>

    


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script><script src="/js/dashboard.js"></script>
  </body>
</html>
