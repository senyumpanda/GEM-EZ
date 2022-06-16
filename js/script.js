$(document).ready(() => {
    let page = 1;

    // ambil data genre
    $.get("../controller/game.php?akses=genre_akses", (respon) => {
        $.each(respon, (key, value) => {
            $("#genre").append("<option value='" + value.id_genre + "'>" +
                value.genre + "</option>")
        })

        // ditaruh setelah memproses data genre
        // agar proses ketika memuat data akan memproses data genre dulu
        // dalam bentuk <option> baru lanjut ke data galeri_game
        // detail to update data

        var params = window.location.search.substring(1).split("&");
        for (var i = 0; i < params.length; i++) {
            params[i] = params[i].split("=");
        }

        if (params[0][0] == "akses" && params[0][1] == "update") {
            $.get("../controller/game.php?akses=detail&data=" + params[1][1], (respon) => {
                $("#galeri_id").val(respon.id_galeri);
                $("#nama").val(respon.nama);
                $("#genre").val(respon.genre_game_id);
                $("#tanggal").val(respon.tanggal_rilis);
                $("#deskripsi").html(respon.deskripsi);
                $("#link").val(respon.link);
                $("#galeri_id").val(respon.id_galeri)
            });
        }

        // akhir detail to update data

        // penanganan submit

        $("form#akses_data").submit((event) => {
            event.preventDefault();
            var data = $("form#akses_data").serialize();
            // update / edit data
            if (params[0][0] == "akses" && params[0][1] == "update") {
                $.post("../controller/game.php?akses=update", data, (respon) => {
                    // console.log(data);
                    alert("Data Game Baru Berhasil Diperbaharui.");
                    window.location.href = "index.php";
                })
            }
            // update / edit data
            else {
                // tambah data baru
                $.post("../controller/game.php?akses=create", data, (respon) => {
                    // console.log(data);
                    alert("Data Game Baru Berhasil Ditambahkan.");
                    window.location.href = "index.php";
                })
                // tambah data baru
            }
        })

        // penanganan submit

    })
    // ambil data genre

    // tampilkan galeri game ~ Customer

    var o = $("#urutan_game").val();
    var s = $("#nama").val().toUpperCase();
    var g = $("#genre").val();

    load_page(page);

    function load_page() {
        $.get("../controller/game.php?akses=read&awal=" + page + "&s=" + s + "&o=" + o + "&g=" + g, (respon) => {
            $.each(respon, (key, value) => {
                $('#galeri_game_a').append(
                    "<div class='konten col-lg-6 col-md-6 col-sm-12 mb-2'>" +
                    "<div class='card bg-dark text-white'>" +

                    "<div class='isi-gambar card-img' style='background-image: url(../" + value.gambar + ");'>" +
                    "</div>" +

                    "<div class='card-img-overlay'>" +
                    "<h5 class='card-title'>" + value.nama + "</h5>" +
                    "<a href=' ../controller/game.php?akses=delete&ket=" + value.nama + "'>" +
                    "<p class='card-text admin hapus'>" +
                    "<i class='bi bi-x-lg me-1'></i>" +
                    "HAPUS" +
                    "</p>" +
                    "</a>" +

                    "<a href='detail.php?nama=" + value.nama + "'>" +
                    "<p class='card-text admin'>" +
                    "<i class='bi bi-info-circle me-1'></i>" +
                    "DETAIL FILM" +
                    "</p>" +
                    "</a>" +
                    "<a href='edit_add.php?akses=update&data=" + value.id_galeri + "'>" +
                    "<p class='card-text admin edit'>" +
                    "<i class='bi bi-pencil-square me-1'></i>" +
                    "EDIT" +
                    "</p>" +
                    "</a>" +
                    "<p class='card-text admin-akhir mt-1'>" +
                    "<i class='bi bi-funnel'></i>" +
                    value.genre +
                    "</p>" +
                    "</div>" +

                    "</div>" +
                    "</div>"
                );
            });
        });
        $.each([1, 2, 3], (key, value) => {
            $("#page-ul").append("<li class='page-item pilih satu'><span class='page-link' id=' " + value + " '>" + value + "</span></li>")
        })

    }

});