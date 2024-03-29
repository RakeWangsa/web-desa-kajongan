<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard web desa Kajongan</title>
    

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
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

    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Dashboard Kajongan</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @include('sweetalert::alert')
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
                <div class="row">
                    <div class="col-lg-9">
                        <h4>Kelola Peta</h4>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahLokasi">Tambah Lokasi</button>

                   <!-- Modal -->
<div class="modal fade" id="tambahLokasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Lokasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/addMap" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="mb-4">
                    <label for="namaLokasi" class="form-label">Nama Lokasi</label>
                    <input type="text" class="form-control" name="nama" id="namaLokasi" placeholder="Nama Lokasi">
                </div>
                <div>
                    <label for="koordinatLokasi" class="form-label">Koordinat Lokasi</label>
                    <input type="text" class="form-control" name="koordinat" id="koordinatLokasi" placeholder="Koordinat Lokasi">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

                    </div>
                </div>
                
                <div class="col-lg-10 mt-2">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Koordinat</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $map)
                          <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $map["nama"] }}</td>
                            <td>{{ $map["koordinat"] }}</td>
                            <td>
                                <div style="display: flex;flex-direction:row">
                                    <a href="/editMap/{{ $map['id'] }}" type="button" class="btn btn-warning">Edit</a>
                                    <!-- Button trigger modal -->
                                    <form action="/deleteMap/{{ $map['id'] }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $allData->links('pagination::bootstrap-4') }}
                </div>
            </div>
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
