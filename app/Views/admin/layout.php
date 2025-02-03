<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title><?= $title ?></title>

   <!--!======= All CSS files linkup =======-->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lineicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fullcalendar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

    <!--!===== Tabler ICON =====-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css" integrity="sha512-tpsEzNMLQS7w9imFSjbeOHdZav3/a0bSESAL1y5jyJDoICFF2YwEdAHOPdOr1t+h8hTzar0flphxR76pd0V1zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!--!===== Sweetalert =====-->
     <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css" />

     <!--!===== Sweetalert =====-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!--!===== Leaflea CSS =====-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

     <!--!===== Leaflea JS =====-->
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
  
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="index.html">
             <img style="width: 90%;" src="<?= base_url('assets/images/logo/logo.png') ?>" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
        <li class="nav-item mb-2">
            <a href="invoice.html">
             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
             <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
             <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
             <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
             </svg>
              <span class="text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="<?= base_url('admin/data_pegawai') ?>">
             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
             <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
             <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
             <path d="M16 3.13a4 4 0 0 1 0 7.75" />
             <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
             </svg>
         <span class="text">Data Pegawai</span>
        </a>
            </a>
          </li>
          <li class="nav-item nav-item-has-children mb-2">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#master-data"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-database"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0" /><path d="M4 6v6a8 3 0 0 0 16 0v-6" /><path d="M4 12v6a8 3 0 0 0 16 0v-6" /></svg>
              <span class="text">Master Data</span>
            </a>
            <ul id="master-data" class="collapse dropdown-nav">
              <li>
              <a href="<?= base_url('admin/jabatan') ?>"> Data Jabatan</a>
              </li>
              <li>
              <a href="<?= base_url('admin/lokasi_presensi') ?>"> Lokasi Presensi </a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children mb-2">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-report-analytics"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 17v-5" /><path d="M12 17v-1" /><path d="M15 17v-3" /></svg>
              <span class="text">Rekap Presensi</span>
            </a>
            <ul id="ddmenu_1" class="collapse dropdown-nav">
              <li>
                <a href="index.html"> Rekap Harian </a>
              </li>
              <li>
                <a href="index.html"> Rekap Bulanan </a>
              </li>
            </ul>
          </li>
          <li class="nav-item mb-2">
            <a href="invoice.html">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" /><path d="M22 22l-5 -5" /><path d="M17 22l5 -5" /></svg>
              <span class="text">Ketidakhadiran</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="invoice.html">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
              <span class="text">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                      <div class="image">
                         <img src="<?= base_url('assets/images/profile/mohan 2.jpg') ?>" alt="" />
                                </div>
                        <div>
                          <h6 class="fw-500 text-uppercase"><?= session()->get('username'); ?></h6>
                          <p><?= session()->get('role_id'); ?></p>
                        </div>
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <div class="author-info flex items-center !p-1">
                        <div class="image">
                          <img src="assets/images/profile/profile-image.png" alt="image">
                        </div>
                        <div class="content">
                          <h4 class="text-sm">Adam Joe</h4>
                          <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                            href="#">Email@gmail.com</a>
                        </div>
                      </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> View Profile
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-alarm"></i> Notifications
                      </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2><?= $title ?></h2>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <?= $this->renderSection('content') ?>
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div class="terms d-flex justify-content-center justify-content-md-end">
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!--!======= All Javascript files linkup =======-->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jvectormap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/polyfill.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
     integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--!===== datatables =====-->
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>

    

    

    <script>
      //data tables 
        $(document).ready(function() {
          $('#datatables').DataTable();
        });
      //sweetalert berhasil 
        $(function() {
            <?php if (session()->has('berhasil')) { ?>
              Swal.fire({
                title: "<?= session()->getFlashdata('berhasil') ?>",
               icon: "success"
              });
            <?php } ?>
        });

        $('.tombol-hapus').on('click', function(){
        var getLink = $(this).attr('href');
        Swal.fire({
         title: "Anda yakin ingin menghapus ini ?",
         text: "Data yang sudah dihapus tidak dapat dikembalikan!",
        icon: "warning",
         showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
         confirmButtonText: "Yes"
        }).then((result) => {
           if (result.isConfirmed) {
            window.location.href = getLink;
       }
    });
    return false;
      });


</script>

  
  
  </body>
</html>
