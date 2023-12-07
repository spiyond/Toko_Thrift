@extends('tamplate.layout')
@section('title', 'Dashboard - Toko Baju ')
@section('main')
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#"> Dashboard</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-book">
                                </i></div>
                             Dashboard
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book">
                                </i></div>
                            Data kategori Pakaian
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book">
                                </i></div>
                            Data Pakaian
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-pencil"></i></div>
                            Data User
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-like">
                                </i></div>
                            Data Pembelian
                        </a>
                        <a class="nav-link" href="login">
                            <div class="sb-nav-link-icon"><i class="fas fa-right-from-bracket">
                                </i></div>
                            Logout
                        </a>
                    </div>
                </div>
        <div class="sb-sidenav-footeer">
            <div class="small">Logged in as:</div>
            Siswa
            </div>
            </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
            <h1 class="mt-4">Baju</h1>
            <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Daftar Baju</li
            >
            </ol>
            <div class="row gap-4">
            <div class="card col-12 col-md-4 col-lg-3">
            <div class="card-body">
                <img src="assets/img/baju1.png" alt="cover" class="book-img">
<hr>
<p class="text-center fw-bolder fs-4 my-0">Kaos Futsal</p>
<p class="text-center mb-3">Harga:Rp 150000
</p>
<button class="btn btn-primary d-block mx-auto" type="submit">Beli</button>
</div>
</div>
<div class="card col-12 col-md-4 col-lg-3">
<div class="card-body">
<img src="assets/img/baju2.jpeg" alt="cover" class="book-img">
<hr>
<p class="text-center fw-bolder fs-4 my-0">Kaos Polos</p>
<p class="text-center mb-3">Harga:Rp 100000
</p>
<button class="btn btn-primary d-block mx-auto" type="submit">Beli</button>
</div>
</div>
<div class="card col-12 col-md-4 col-lg-3">
<div class="card-body">
<img src="assets/img/baju3.jpeg" alt="cover" class="book-img">
<hr>
<p class="text-center fw-bolder fs-4 my-0">baju wanita</p>
<p class="text-center mb-3">Harga:Rp 200000
</p>
<button class="btn btn-primary d-block mx-auto" type="submit">Beli</button>
</div>
</div>
</div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid px-4">
<div class="d-flex align-items-center justify-content-betweensmall">
    <div class="text-muted">Copyright &copy; Toko Buku</div>
    </div>
    </div>
    </footer>
    </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    </body>
    </html>