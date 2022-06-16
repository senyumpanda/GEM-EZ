<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/game.ico" type="image/gif" sizes="16x16">
    <title>GEM-EZ | AKSES GAME</title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid px-5 pb-2 border-bottom border-dark">
                <a class="navbar-brand fw-bold fs-4" href="index.php">GEM-EZ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item item">
                            <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="login nav-link btn btn-warning text-white d-flex align-items-center"
                                href="form/login.html">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g data-name="Layer 19" id="Layer_19">
                                        <path class="cls-1"
                                            d="M16,17a8,8,0,1,1,8-8A8,8,0,0,1,16,17ZM16,3a6,6,0,1,0,6,6A6,6,0,0,0,16,3Z" />
                                        <path class="cls-1"
                                            d="M23,31H9a5,5,0,0,1-5-5V22a1,1,0,0,1,.49-.86l5-3a1,1,0,0,1,1,1.72L6,22.57V26a3,3,0,0,0,3,3H23a3,3,0,0,0,3-3V22.57l-4.51-2.71a1,1,0,1,1,1-1.72l5,3A1,1,0,0,1,28,22v4A5,5,0,0,1,23,31Z" />
                                    </g>
                                </svg>
                                <span class="ms-1">Masuk</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- AKHIR NAVBAR -->
    </header>
    <!-- AKHIR HEADER -->

    <!-- CONTENT 1 - TOMBOL 'TAMBAH DATA' -->
    <main>
        <div class="c1-luar">
            <div class="c1-dalam">
                <div class="container g-0 c1-konten mt-4">
                    <a href="edit_add.php" class="btn btn-primary px-2 py-2 flex align-items-center">
                        <svg id="Icons" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title />
                            <path
                                d="M15.5,6H13V4a1,1,0,0,0-2,0V6H8.5a7.5,7.5,0,0,0,0,15h7a7.5,7.5,0,0,0,0-15Zm0,13h-7a5.5,5.5,0,0,1,0-11h7a5.5,5.5,0,0,1,0,11Z" />
                            <path
                                d="M10,12.5H9v-1a1,1,0,0,0-2,0v1H6a1,1,0,0,0,0,2H7v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Z" />
                            <circle cx="18" cy="12" r="1" />
                            <circle cx="16" cy="15" r="1" /></svg>
                        <span class="ms-1">
                            Tambah Data
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- AKHIR CONTENT 1 - TOMBOL 'TAMBAH DATA' -->

    <!-- CONTENT 2 - LIST GAME -->
    <main class="c2 mt-3 mb-5">
        <div class="row">
            <div class="col-md-3 col-3 mt-4">
                <!-- Kolom Search dan Urutkan Film-->
                <div class="sorting-ordering">

                    <!-- Urutkan Film -->
                    <div class="container-fluid mt-3 g-0">
                        <div class="border rounded-1">
                            <div class="form-control d-flex align-items-center p-0 ps-4 rounded-0"
                                aria-label="Disabled input example" disabled readonly>
                                <i class="bi bi-sort-alpha-up fs-5 me-2"></i>
                                <p class="fs-5 mt-3"> Sorting </p>
                            </div>
                            <div class="container-fluid p-lg-2 p-md-3 p-sm-2 p-2">
                                <!-- Pilihan Urutan Film -->
                                <div class="form-floating">
                                    <select class="form-select" id="urutan_game" name="urutan_game"
                                        aria-label="Floating label select example">
                                        <option value="">-</option>
                                        <option value="asc">ASCENDING</option>
                                        <option value="desc">DESCENDING</option>
                                    </select>
                                    <label for="floatingSelect">Urutkan Data</label>
                                </div>
                                <!-- Akhir Pilihan Urutan Film-->
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Urutkan Film -->

                    <!-- Pendefinisian Film -->
                    <div class="container-fluid mt-3 g-0">
                        <div class="border rounded-1">
                            <div class="form-control d-flex align-items-center p-0 ps-4 rounded-0"
                                aria-label="Disabled input example" disabled readonly>
                                <i class="bi bi-funnel-fill fs-5 me-2"></i>
                                <p class="fs-5 mt-3"> Filter </p>
                            </div>
                            <div class="container-fluid p-lg-2 p-md-3 p-sm-2 p-2">

                                <!-- Cari Nama Film -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="">
                                    <label for="nama">Nama Game</label>
                                </div>


                                <!-- Akhir Cari Nama Film-->

                                <!-- Pilihan Pendefinisian Film -->
                                <div class="form-floating">
                                    <select class="form-select" id="genre" name="genre"
                                        aria-label="Floating label select example">
                                        <option value="">-</option>
                                    </select>
                                    <label for="floatingSelect">Genre Game</label>
                                </div>
                                <!-- Akhir Pilihan Pendefinisian Film-->
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Pendefinisian Film -->

                </div>
                <!-- Akhir Kolom Search, Urutkan Film, Tambah Film -->
            </div>

            <div class="col-md-9 col-9">
                <div class="list-game c2">
                    <div class="container-fluid">
                        <div class="container c2-luar my-3">
                            <div class=" c2-dalam">
                                <div class="list-game">
            
                                    <div class="row" id="galeri_game_a" style="height: 100%;">
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- AKHIR CONTENT 2 - LIST GAME -->

    <!-- PAGINATION -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center" id="page-ul">
        </ul>
    </nav>
    <!-- AKHIR PAGINATION -->

    <!-- FOOTER -->
    <footer class="mt-5 border-top border-dark">
        <div class="foo-luar p-3 text-center">
            <div class="foo-dalam px-3 py-1">
                <span>-</span>
                &copy;
                <span>Made by GEM-EZ Dev</span>
                <span>-</span>
            </div>
        </div>
    </footer>
    <!-- AKHIR FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>

</body>

</html>