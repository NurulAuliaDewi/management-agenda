<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="
    fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Manajemen Agenda Pos Indoensia (persero)</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-light" fixed-stop>
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html" style="color: black;">Manajemen Agenda |<b> PT. Pos Indonesia (persero)</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Temukan sesuatu..." sria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass mr-2"></i>Cari</button>
        </form>

        <div class="icon ml-4">
          <h4>
            <i class="fas fa-envelope mr-3" data-toogle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3" data-toogle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt mr-3" data-toogle="tooltip" title="Keluar"></i>
          </h4>
        </div>
      </div>
    </div>
  </nav>

 <div class="row no-gutters">
    <div class="col-md-2 bg-dark pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Active</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href=""><i class="fa-solid fa-house mr-2"></i>Beranda</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/jadwal"> <i class="fa-regular fa-calendar-check mr-2"></i>Jadwal Rapat</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/tambah"><i class="fa-regular fa-square-plus mr-2"></i>Tambah Jadwal</a><hr class="bg-secondary">
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="/riwayat"><i class="fa-solid fa-clock-rotate-left mr-2"></i>Riwayat Rapat</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/login"><i class="fas fa-sign-out-alt mr-2"></i>Keluar</a><hr class="bg-secondary">
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fa-regular fa-calendar-check mr-2"></i>TAMBAH JADWAL RAPAT</h3><hr>
        <div class="card-body bg-dark">
          <div class="row g-3">
        <div class="col mb-5 ">
          <h5 class="text-white">No Surat Undangan</h5>
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col mb-5">
          <h5 class="text-white">Jumlah Peserta</h5>
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        </div>
        <div class="row g-3">
          <div class="col mb-5">
            <h5 class="text-white">Nama Rapat</h5>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col mb-5">
            <h5 class="text-white">Ruangan Rapat</h5>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>
        <div class="row g-3">
          <div class="col mb-5">
            <h5 class="text-white">Tanggal Rapat</h5>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col mb-5">
            <h5 class="text-white">Divisi Penanggung jawab</h5>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>
        <div class="row g-3">
          <div class="col mb-5">
            <h5 class="text-white">Jam Rapat</h5>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col mb-5">
            <h5 class="text-white">Nama Penanggung Jawab</h5>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>
        <div class="row g-3">
          <div class="col mb-5">
            <h5 class="text-white">Agenda Rapat</h5>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col mb-5">
            <h5 class="text-white">Kontak Penanggung Jawab</h5>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>   
       </div>
      <div class="button">
        <a href="#" class="btn btn-primary mt-4 bg-dark"><i class="fa-solid fa-arrow-left pr-2"></i>Kembali</a>
        <a href="#" class="btn btn-primary mt-4 bg-dark"><i class="fa-solid fa-check pr-2"></i>Simpan</a> 

      
<!-- 
   <div class="center">
    <label for="click" class="click-me"></label>
  </div>
        <div class="popup">
          <div class="text-content"><h2>SUKSES!</h2></div>
          <label for="click"><i class="fa-solid fa-circle-check"></i></label>
          <p class="isikonten">Ruangan rapat berhasil di booking</p>
          <div class="line"></div>
          
          <div class="button-content">
            <a href="" class="btn btn-primary mt-4 bg-dark">Lihat Detail</a><br>
            <a href="" class="btn btn-primary mt-4 bg-dark"></i>Kembali</a>           
          </div>
        </div>

-->


       </div>




      
      </div>
      
    </div>
  </div>
    

  </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/dashboard.js"></script>
  </body>
</html>