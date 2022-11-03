<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <title>Details</title>

    <style>
        .wrapper {
            padding: 2rem 5rem 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .content-wrapper {
            margin: 0 5rem;
        }

        .content-wrapper h1 {
            font-size: 1.5rem;
        }

        .navbar-wrapper {
            display: flex;
            justify-content: center;
        }

        .carousel {
            width: 24rem;
            height: 14rem;
        }

        .slider-wrapper {
            display: flex;
            flex-direction: column;
            padding: 0 1rem;
        }

        .list-group-item,
        .tentang {
            display: flex;
            justify-content: center;
        }

        .tentang{
            margin: 1rem;
        }
        .card{
            width: 24rem;
            height: 30rem;

        }

        .list-group-item .btn-warning {
            width: 16rem;
        }
    </style>
</head>

<body>
    @include('Navbars.NavBar')
    <div class="wrapper">
        <div class="navbar-wrapper">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="details/20221101120921921.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="details/20221101120924924.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="details/ayaya.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="content-wrapper">
            <h1>Akun Genshin Impact AR 45 Hutao signature C6</h1>
            <h2>RP. 1.500.000,-</h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Detail<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Spesifikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Info penting</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <p>
                Kondisi: Second <br>
                Judul Game: Genshin impact<br>
                Kategori: MMORPG<br>
                Etalase: Flash Sale<br>
                *Password harap di ganti setelah di terima untuk menjaga keamanan privasi pengguna<br>
                ----------------------------------------------------------------------------------------------------<br>
                Level: AR 45<br>
                Main Character: Aether<br>
                *5 Character: <b>YAE MIKO</b>, Hutao, Ayaka, Ayato<br>
                Region: Asia<br>

                OS Support:<br>
                - Windows® 10, 8.1, 8<br>
                - Mac OS (v.10.10.x +)<br>
                - Linux (v. 2.6.x +)<br>
                - Chrome OS<br>
                Garansi Toko satu minggu setelah serah terima akun dilakukan.<br>
            </p>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Beli akun ini sekarang?</h5>
                <p class="card-text">Seluruh transaksi yang dilakukan di Jual-Jual sudah di awasi oleh Otoritas Jasa
                    Keuangan Indonesia guna menjaga legalitas dan keamanan dalam bertransaksi.</p>
            </div>
            {{-- <div class="slider-wrapper">
                <label for="customRange2" class="form-label">Example range</label>
                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                <p>Stok total: </p>
            </div> --}}
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <button type="button" class="btn btn-warning">Beli Sekarang</button>
                </li>
                <li class="list-group-item">Chat Penjual</li>
                <li class="list-group-item">Tambahkan ke wishlist</li>
                <li>

                    <a href="#" class="card-link tentang">Tentang Penjual</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
<footer class="bg-light text-center ">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright Jual-Jual
    </div>
</footer>
