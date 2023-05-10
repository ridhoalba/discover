<?php
require_once "../functions/addFunction.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="a platform to knowing and add your culture to the world" />
  <meta name="autor" content="FrogTel" />
  <title>Discover</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
  <link rel="preload" href="../img/greenLogo.png" />
  <link rel="stylesheet" href="../style/add.css" />
  <link rel="icon" href="../img/icon.ico">
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="container-fluid">
  <div class="landingPage container-fluid h-100">
    <header class="container-fluid shadow-sm d-flex justify-content-center align-items-center py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 p-xxl-0 px-lg-0 p-lg-0 p-md-3 p-sm-3 ps-md-3 ps-sm-3 position-fixed">
      <section class="container-lg d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-xxl-between justify-content-xl-between justify-content-lg-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start h-100">
        <div class="d-flex flex-row justify-content-center align-items-center">
          <div class="logoWrapper">
            <img src="../img/greenLogo.png" alt="" />
          </div>
          <div class="ms-2">
            <h1 class="title fw-bold">Discover</h1>
          </div>
          <div class="humbergerWrapper d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block flex-column justify-content-center align-items-center">
            <div class="humbergerLine"></div>
          </div>
        </div>
        <nav class="w-25 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-4 mt-sm-4 ms-xxl-0 ms-xl-0 ms-lg-0 ms-md-4 ms-md-4 ms-sm-4">
          <ul class="d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start">
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="home.php">
                <i class="icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block" data-feather="home"></i>
                <span>Home</span></a>
            </li>
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="about.php">
                <i class="icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block" data-feather="users"></i>
                <span>About</span></a>
            </li>
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="purpose.php">
                <i class="icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block" data-feather="minimize-2"></i>
                <span>Purpose</span></a>
            </li>
          </ul>
        </nav>
        <div class="d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none">
          <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6281262156159&text=Halo+FrogTel&type=phone_number&app_absent=0" class="btn py-2 px-4 text-light fw-bold">Contact</a>
        </div>
      </section>
    </header>
    <a style=" z-index: 80; bottom: 10px !important; right: 10px !important;" class="waWrapper img-fluid d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block position-fixed" target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6281262156159&text=Halo+FrogTel&type=phone_number&app_absent=0">
      <img style="width: 50px;" src="../img/whatsapp.png" alt="">
    </a>
    <main class="container-fluid h-100 d-flex justify-content-center align-items-center">
      <article class="h-100">
        <form action="" method="post" enctype="multipart/form-data">
          <ul>
            <li>
              <label for="namaSuku">Nama suku</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="text" id="nameSuku" name="namaSuku" placeholder="Masukkan nama suku" autocomplete="off" autofocus />
            </li>
            <li>
              <label for="gambarSuku">Gambar suku</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="file" name="gambarSuku" />
            </li>
            <li>
              <label for="deskripsiSuku">Deskripsi suku</label><br />
              <textarea class="w-100 border-0 ps-3 py-2 fw-light" rows="5" placeholder="Masukkan deskripsi suku" name="deskripsiSuku" id="deskripsiSuku"></textarea>
            </li>
            <li>
              <label for="asalSuku">Asal suku</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="text" id="asalSuku" name="asalSuku" placeholder="Masukkan asal suku" autofocus />
            </li>
            <li>
              <label for="jumlahPenduduk">Jumlah penduduk</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="text" id="jumlahPenduduk" name="jumlahPenduduk" placeholder="Masukkan jumlah penduduk" autofocus />
            </li>
            <li>
              <label for="namaMakananAdat">Nama makanan adat</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="text" id="namaMakananAdat" name="namaMakananAdat" placeholder="Masukkan nama makanan" autofocus />
            </li>
            <li>
              <label for="gambarMakananAdat">Gambar makanan Adat</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="file" id="gambarMakananAdat" name="gambarMakananAdat" autofocus />
            </li>
            <li>
              <label for="deskripsiMakananAdat">Deskripsi makanan adat</label><br />
              <textarea class="w-100 border-0 ps-3 py-2 fw-light" rows="5" placeholder="Masukkan deskripsi makanan" name="deskripsiMakananAdat" id="deskripsiMakananAdat"></textarea>
            </li>
            <li>
              <label for="namaPakaianAdat">Nama pakaian adat</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="text" id="namaPakaianAdat" name="namaPakaianAdat" placeholder="Masukkan nama pakaian" autofocus />
            </li>
            <li>
              <label for="gambarPakaianAdat">Gambar pakaian Adat</label><br />
              <input class="w-100 border-0 ps-3 py-2 fw-light" type="file" id="gambarPakaianAdat" name="gambarPakaianAdat" autofocus />
            </li>
            <li>
              <label for="deskripsiPakaianAdat">Deskripsi pakaian adat</label><br />
              <textarea class="w-100 border-0 ps-3 py-2 fw-light" rows="5" placeholder="Masukkan deskripsi pakaian" name="deskripsiPakaianAdat" id="deskripsiPakaianAdat"></textarea>
            </li>
            <li class="mt-3">
              <button name="tambahkanButton" class="btn py-2 w-100 text-light fs-6">Tambahkan</button>
            </li>
          </ul>
        </form>
      </article>
    </main>
  </div>
  <script>
    feather.replace();

    const humberger = document.querySelector(".humbergerWrapper");
    const header = document.querySelector("header");

    humberger.addEventListener("click", () => {
      header.classList.toggle("sidebarOn");
    });
  </script>
</body>

</html>