<?php
session_start();
if (empty($_SESSION['nim'])) { ?>
    <script type="text/javascript">
        alert('kamu Belum Login');
        window.location.assign('index.php');
    </script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="Assets_Tamplate/img/logo.jpeg">
    <link rel="icon" type="image/png" href="Assets_Tamplate/img/logo.jpeg">
    <title>
        Input Catatan Kuesioner
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="Assets_Tamplate/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="Assets_Tamplate/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="Assets_Tamplate/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="Assets_Tamplate/assets/css/argon-dashboard.css?v=2.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" # ">
                <span class="ms-1 font-weight-bold">
                    <center> Aplikasi Kuesioner</center>
                </span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="user.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Laporan dan Input Data</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="Catatan.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Catatan Kuesioner</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="input_catatan.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Input Catatan Kuesioner</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Keluar Aplikasi</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="logout.php" onclick="return confirm('Apakah anda yakin keluar?')">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-collection text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm text-white"><a class="text-white" href="user.php">Dashboard</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Input</li>
                        <li class="breadcrumb-item text-sm text-white"><a class="text-white" href="Catatan.php">Catatan</a></li>
                        <li class="breadcrumb-item text-sm text-white"><a class="text-white" href="logout.php" onclick="return confirm('Apakah anda yakin keluar?')">Logout</a></li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Input Catatan Kuesioner</h6>
                </nav>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0">
                        <img src="Assets_Tamplate/img/logo.jpeg" height="55" width="55" style="border-radius: 50%;" alt="teguh bagmar">
                    </a>
                </li>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Input Data</h6>
                        </div>
                        <div class="card-body">
                            <form action="simpan_input.php" method="post">
                                
                            <input name="tanggal" type="hidden" class="form-control">

                                <div class="form-group">
                                    <label>Apakah ada hal-hal yang perlu diperbaiki dalam diri saya namun kamu merasa sulit untuk mengatakannya secara langsung?</label>
                                    <input name="pSatu" type="text" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Katakan pada saya hal yang ingin kamu sampaikan tentang kekurangan saya tapi tidak enak untuk bicara langsung?</label>
                                    <input name="pDua" type="text" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Menurut pendapat kamu, apa saja kebaikan dan kekurangan saya selama kita mengenal satu sama lain?</label>
                                    <input name="pTiga" type="text" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Bisakah kamu berbagi pandangan tentang bagaimana kamu mendeskripsi kan saya?</label>
                                    <input name="pEmpat" type="text" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Berikan saya kritik & saran untuk menjadi lebh baik</label>
                                    <input name="kritik" type="text" required class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN </button>
                                    <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> RESET </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">

                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                             Teguh Bagas.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Konfigurasi Tema</h5>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Warna Sidebar</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Ada 2 Macam Pilihan</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">Light</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm">Kamu Bisa Mengubah Sesuai Keinginan</p>
                <i class="text-sm d-xl-none d-block mt-2">Hanya berfungsi di tampilan desktop</i>

                <!-- Navbar Fixed -->

                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="Assets_Tamplate/assets/js/core/popper.min.js"></script>
    <script src="Assets_Tamplate/assets/js/core/bootstrap.min.js"></script>
    <script src="Assets_Tamplate/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="Assets_Tamplate/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="Assets_Tamplate/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="Assets_Tamplate/assets/js/argon-dashboard.min.js?v=2.0.0"></script>
</body>

</html>