<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('asset/snackbar/dist/js-snackbar.min.css') }}">
    <script src="{{ url('asset/snackbar/dist/js-snackbar.min.js') }}"></script>

    <title>Dashboard</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="assets/img/logosmk.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">SMKN 4 BOGOR</span>
                    <span class="profession">Pembayaran Spp</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links" style="padding:0px !important;">
                    <li class="nav-link" style="padding:0px !important;">
                        <a href="/home">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    @if (Auth::guard('admin')->check())

                    <li class="nav-link" style="padding:0px !important;">
                        <a href="/kelas">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Kelas</span>
                        </a>
                    </li>

                    <li class="nav-link" style="padding:0px !important;">
                        <a href="/siswa">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Siswa</span>
                        </a>
                    </li>

                    <li class="nav-link" style="padding:0px !important;">
                        <a href="/petugas">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Petugas</span>
                        </a>
                    </li>

                    <li class="nav-link" style="padding:0px !important;">
                        <a href="/spp">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Spp</span>
                        </a>
                    </li>

                    <li class="nav-link" style="padding:0px !important;">
                        <a href="/pembayaran">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Pembayaran </span>
                        </a>
                    </li>

                    @endif

                    @if (Auth::check())

                    <li class="nav-link" style="padding:0px !important;">
                        <a href="/history_pembayaran">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">History</span>
                        </a>
                    </li>

                    @endif
                    <li class="nav-link " style="padding:0px !important;">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <a
                                onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </form>
                    </li>

                </ul>
            </div>




    </nav>

    <section class="home">
        <div class="container">
            <div class="text">Haloooooo @if (Auth::check())
                Siswa {{ Auth::user()->nama }}
            @endif
            @if (Auth::guard('admin')->check())
            Admin {{ Auth::guard('admin')->user()->nama }}
        @endif
        </div>
            @yield('content')

        </div>
    </section>

    <script src="{{ url('assets/js/script.js') }}"></script>
