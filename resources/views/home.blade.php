<!doctype html>
<html lang="en">

    <!-- HEADER -->
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <title>SAUNG KURING RESTO</title>
  </head>
  <style>
    body {
        position: relative;
        min-height: 100vh;
    }
    
    .content {
        flex: 1;
    }
    
    .footer {
        background-color: orange;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        bottom: 0;
        width: 100%;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
    }
    
    .footer p {
        color: rgb(0, 0, 0);
        font-size: 16px;
        margin: 0;
        text-align: center;
    }
    
    .footer img {
        width: 100px;
        height: auto;
        margin-right: 10px;
        margin-left: 20px;
        width: 100px; 
        height: 50px;
    }
</style>
  <body class="bg-image" style="background-image: url('assets/A.jpg');">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <div class="container">
        <a class="navbar-brand text-dark" href="#"><img src="assets/o.png" width='100px' height='50px' alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active text-dark" href="/viewm" id="btn-mahasiswa">Order Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-dark" href="/viewb" id="btn-mahasiswa">Booking Report</a>
            </li>
        </ul>
        </div>
        <span id="real-time-date"></span>
        <h4>/</h4>
        <span id="real-time-clock"></span>
    </div>
</nav>

    <div class="container mt-3">
        
        <!-- CONTENT -->
        @yield('Content')

    </div>
    <footer class="footer">
        <img src="assets/o.png" alt="Logo" />
        <div class="container">
            <p>Address: Jln. Sholeh Iskandar No. 9 Kota Bogor </p>
            <p>Telp: 02518331885 / 02518327805 0878 7332 6888 / 0878 7332 7888 delivery order</p>
            <p>Open Hours 10.00 - 20.30</p>
        </div>
    </footer>
    
    
    <!-- JS -->
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    </script>
    <script>
        function updateClock() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    // Tambahkan angka 0 di depan angka tunggal
    hours = (hours < 10 ? "0" : "") + hours;
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;

    // Format waktu ke dalam string
    var currentTimeString = hours + ":" + minutes + ":" + seconds;

    // Update elemen dengan ID "real-time-clock" dengan waktu yang baru
    document.getElementById("real-time-clock").innerHTML = currentTimeString;
}

function updateDate() {
    var currentDate = new Date().toDateString();

    // Update elemen dengan ID "real-time-date" dengan tanggal yang baru
    document.getElementById("real-time-date").innerHTML = currentDate;
}

// Panggil fungsi updateClock() setiap 1 detik (1000 milidetik)
setInterval(updateClock, 1000);

// Panggil fungsi updateDate() setiap 1 detik (1000 milidetik)
setInterval(updateDate, 1000);

    </script>
    
    <style>
        .bg-image {
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
  </body>
</html>
