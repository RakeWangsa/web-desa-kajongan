<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard web desa Kajongan</title>
    @trixassets

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
            <div class="row mt-3">
                <div class="col-lg-10">
                    <h4>Form Menambahkan artikel</h4>
                    <form action="/addartikels" method="POST" enctype="multipart/form-data">
                        @include('sweetalert::alert')
                        @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Judul Artikel</label>
                              <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul">
                              <small id="emailHelp" class="form-text text-muted">Masukkan Judul Artikel</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Penulis Artikel</label>
                              <input name="author" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan penulis">
                            </div>
                            <br>
                            @trix(\App\Article::class, 'contents')
                            <br>
                            <label for="exampleInputPassword1">Masukkan Photo Thumbnail</label>
                            <input class="form-control" type="file" id="formFile" name="thumbnail">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
            <br>
            <br>
            <hr class="hr" />
            <p style="margin: 0;margin-top:12px"><b>Pemdes Kajongan</b> © 2023-2024</p>
            <p>Made with Love by KKN Undip TIM II 2023</p>
        </main>
        
    </div>

    


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script><script src="/js/dashboard.js"></script>
  </body>
</html>
