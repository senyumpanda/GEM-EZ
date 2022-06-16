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
    <link rel="stylesheet" href="../css/edit_add.css">
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
        <div class="c1-edit-add-luar">
            <div class="c1-edit-add-dalam">
                <div class="container g-0 c1-edit-add-konten mt-4">
                    <form action="" method="post" id="akses_data">
                        <div class="isi-konten-akses-data w-75 m-auto">
                            <div class="judul">
                                <h2 class="text-center fw-bold">AKSES DATA GAME</h2>
                            </div>

                            <div class="akses-data w-75 m-auto">
                                <!-- ID xx UPDATE -->
                                <input type="hidden" id="galeri_id" name="galeri_id" value="">
                                <!-- Akhir ID xx UPDATE -->

                                <!-- Nama  -->
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        aria-describedby="emailHelp" autocomplete="off">
                                </div>
                                <!-- Akhir Nama -->

                                <!-- Genre  -->
                                <div class="mb-2">
                                    <label for="genre" class="form-label">Genre</label>
                                    <select class="form-select" name="genre" id="genre" aria-label="Default select example">
                                        <option value="" selected="selected">-</option>
                                    </select>
                                </div>
                                <!-- Akhir Genre -->

                                <!-- Tanggal Rilis -->
                                <div class="mb-2">
                                    <label for="tanggal" class="form-label">Tanggal Rilis</label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal"
                                        autocomplete="off">
                                </div>
                                <!-- Akhir Tanggal Rilis -->

                                <!-- Deskripsi -->
                                <div class="mb-2">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control teks" name="deskripsi" id="deskripsi" cols="30"
                                        rows="10"></textarea>
                                </div>
                                <!-- Akhir  Deskripsi -->

                                <!-- Link -->
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link Permainan</label>
                                    <input type="text" class="form-control" name="link" id="link" autocomplete="off">
                                </div>
                                <!-- Akhir Link -->

                                <div class="tbl-eksekusi">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Teruskan
                                    </button>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- AKHIR CONTENT 1 - TOMBOL 'TAMBAH DATA' -->

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