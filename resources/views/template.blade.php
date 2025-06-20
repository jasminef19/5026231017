<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jasmine Fathina Hakim : 5026231017</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .jumbotron {
            background-color: #B3C8CF;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0%;
        }

        body {
            background-image: url(bg_crud.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-bottom: 5%;
        }

        .container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            margin-top: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        table th {
            background-color: #1e3a5f;  /* warna biru gelap */
            color: white;              /* teks putih biar kontras */
            padding: 12px;
            text-align: center;
        }

        table td {
            text-align: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .custom-navbar {
            width: fit-content;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 5px 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* opsional buat efek bayangan */
        }

        .navbar-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .nav-link {
            color: black !important;
        }

        .nav-link:hover {
            text-decoration: underline;
            color: #1e3a5f !important; /* atau warna hover lain kalau mau */
        }

    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231017 : Jasmine Fathina Hakim</h1>
    </div>

    <div class="navbar-wrapper">
        <nav class="navbar navbar-expand-sm custom-navbar">
            <ul class="navbar-nav justify-content-center w-100">
                <li class="nav-item">
                    <a class="nav-link" href="#">All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sofa">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/eas">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keranjang">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/counter">Latihan 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/chat">chat</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
