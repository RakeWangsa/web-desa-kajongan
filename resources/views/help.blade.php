<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Halaman Bantuan</title>
    

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Halaman Bantuan</a>
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
                <div class="col-lg-7">
                    <h2>- Halaman Bantuan -</h2>
                    <br>
                    <h5>Mengganti Perangkat Desa</h5>
                    Berikut langkah untuk mengganti perangkat desa :
                    <ul>
                        <li>Masuk Ke halaman dashboard</li>
                        <li>isi form dari jabatan perangkat yang mau diganti foto atau namanya</li>
                        <li>isi nama dan juga foto dari perangkat baru</li>
                        <li>Klik submit apabila data yang dimasukkan sudah sesuai</li>
                    </ul>
                    <h5>Menambahkan Artikel</h5>
                    berikut cara untuk menambahkan artikel pada website :
                    <ul>
                        <li>Masuk Ke halaman tambah artikel</li>
                        <li>masukkan semua data yang di minta dalam form</li>
                        <li>User dapat memformat artikel seperti membuat head titel, membold text dll, namun foto hanya dapat dimasukkan melalui field upload thumbaik</li>
                        <li>Apabila sudah sesuai user dapat menekan tombol submit</li>
                    </ul>
                    <h5>Mengedit atau menghapus Artikel</h5>
                    berikut cara untuk Mengedit atau menghapus artikel pada website :
                    <ul>
                        <li>Masuk Ke halaman olah artikel artikel</li>
                        <li>untuk menghapus artikel tekan tombol delete maka artikel akan terhapus</li>
                        <li>untuk mengedit artikel tekan tombol edit maka aplikasi akan masuk ke halaman edit</li>
                        <li>apabila user masuk ke halaman edit, user dapat mengubah konten dari artikel yang ingin diubah</li>
                        <li>foto yang sudah diupload tidak dapat diubah kembali</li>
                        <li>apabila semua konten sudah dibuat sesuai dengan yang diinginkan user dapat menekan tombol submit</li>
                    </ul>
                    <h5>Pesan Error</h5>
                    <p>
                        Apabil bila muncul pesan error dengan pesan <b>Field Kosong</b> 
                        artinya terdapat field yang belum di isi di dalam form pada saat form di submit,<br>
                        pastikan semua data yang diminta di dalam form telah di isi.
                    </p>

                    <h5>Kontak Developer</h5>
                    <div style="display: flex;flex-direction:row;align-items:center">
                        <img src="./assets/profile.png" alt="" width="80px" style="border-radius: 200px;margin-right:14px;r">
                        <p>
                            WhatsApp : <b>+62 821 3932 2043</b>
                            <br>
                            E-mail : <b>benhard.simanullang.bs@gmail.com</b>
                            <br>
                            Source Code : <a href="https://github.com/BenhardSim/web-kajongan">BenhardSim/web-kajongan</a>
                        </p>
                    </div>

                </div>
                <br><br>
                <div class="col-lg-3" >
                    <div class="guide-book shadow">
                        <h5>Guide Book</h5>
                        <p>scan QR code di bawah ini untuk dapat mengkases guidebook penggunaan web</p>
                        <img src="./assets/guide-book.png" alt="" width="100%">
                        <br>
                    </div>
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
