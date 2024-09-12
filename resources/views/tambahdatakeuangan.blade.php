<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tambah Laporan Keuangan : LAYAR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('dashboard_asset/assets/img/layar-icon.png')}}" rel="icon">
    <link href="{{asset('dashboard/assets/img/layar-touch-icon.png')}}" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="{{asset('dashboard_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard_asset/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('dashboard_asset/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center-title justify-content-between title">
            <div class="pagetitle-header">
                <h1>Laporan Keuangan</h1>

            </div><!-- End Page Title -->
        </div>

        <div class="d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        </nav>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <div class="search-bar">
                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                </div><!-- End Search Bar -->

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell-fill"></i>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" data-popper-placement="bottom-end" style="position: absolute;inset: 0px 0px auto auto;margin: 0px;transform: translate(-25px, 35px);width: 365px;">

                        <li class="dropdown-header">
                            <div class="notif-nama">Notifikasi</div>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Pengajuan Surat Anda telah berhasil!</h4>
                                <h3>Silahkan datang ke rumah RT setempat.</h3>
                                <p>01 November 2022</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Gotong Royong - 01 Nov 2022</h4>
                                <h3>Dilaksanakan di Fasum - Jam 08.00 WIB.</h3>
                                <p>25 Oktober 2022</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Pengajuan Surat Anda telah berhasil!</h4>
                                <h3>Silahkan datang ke rumah RT setempat.</h3>
                                <p>11 Oktober 2022</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

        
                <li class="nav-item dropdown pe-3">
        
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    
                    @if(Auth::user()->foto_profil)
                    <img src="{{ asset ('foto/'.Auth::user()->foto_profil)}}" alt="Profile" class="rounded-circle">
                @else
                    <img src="{{ asset('dashboard_asset/assets/img/no-profile-user.png') }}" alt="Unknown Profile" class="rounded-circle">
                @endif
                      <span class="d-none d-md-block dropdown ps-2">{{ Auth::user()->nama_lengkap }}</span>
                  </a><!-- End Profile Iamge Icon -->
        
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    @if(Auth::user()->foto_profil)
                      <li class="dropdown-header">
                        @if(Auth::user()->foto_profil)
                          <img src="{{ asset ('foto/'.Auth::user()->foto_profil)}}" alt="Profile" class="rounded-circle" width="120" height="120">
                          @else
                          <img src="{{ asset('dashboard_asset/assets/img/no-profile-user.png') }}" alt="Profile" class="rounded-circle">
                          @endif
                          <p></p>
                          <h6>{{ Auth::user()->nama_lengkap }}</h6>
                          @if(auth()->user()->isAdmin())
                          <span>Ketua RT</span>
                          @else
                          <span>Warga</span>
                          @endif
                      </li>
                      @endif
                      <x-slot name="content">
                        <a class="dropdown-item d-flex align-items-center" onclick="event.preventDefault();
                    <x-dropdown-link :href="route('profile.edit')">
                        <i class="bi bi-person"></i>
                    {{ __('Profile') }}
                    </x-dropdown-link>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>{{ __('Log Out') }}</span>
                                </a>
                            </li>
        </form>
        
                  </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
        
              </ul>
            </nav><!-- End Icons Navigation -->
        
          </header><!-- End Header -->


   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav " id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-logo">
            <img src="{{asset('dashboard_asset/assets/img/layar-icon.png')}}" alt="">
            <span class="nav-logo-text">LAYAR</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <p></p>
    @if(auth()->user()->isPengguna())
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="bi bi-grid-fill"></i>
            <span>Dasbor</span>
        </a>
    </li><!-- End Dashboard Nav -->



    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pengajuan') }}">
            <i class="bi bi-file-text-fill"></i>
            <span>Pengajuan</span>
        </a>

    <li class="nav-item">
        <a class="nav-link collapsed" href="janji-temu.html">
            <i class="bi bi-people-fill"></i>
            <span>Janji Temu</span>
        </a>
    </li><!-- End Profile Page Nav -->


    

    <li class="nav-item">
<a class="nav-link collapsed" href="{{ route('pengajuanlanjut') }}">
  <i class="bi bi-info-circle-fill"></i>
  <span>Status</span>
</a>
</li><!-- End Dashboard Nav -->
    @endif

@if(auth()->user()->isAdmin())
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid-fill"></i>
            <span>Dasbor</span>
        </a>
    </li><!-- End Dashboard Nav -->
<li class="nav-item">
<a class="nav-link collapsed" href="{{ route('datapenduduk') }}">
  <i class="bi bi-people-fill"></i>
  <span>Data Penduduk</span>
</a>
</li>

<li class="nav-item">
<a class="nav-link collapsed" href="{{ route('datapenduduk') }}">
<i class="bi bi-calendar-week-fill"></i>
          <span>Tambah Agenda</span>
</a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('datapengajuan') }}">
      <i class="bi bi-file-earmark-check-fill"></i>
      <span>Data Pengajuan</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed " href="{{ route('datapengguna') }}">
      <i class="bi bi-person-fill"></i>
      <span>Data Pengguna</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ route('datakeuangan') }}">
      <i class="bi bi-wallet-fill"></i>
      <span>Laporan Keuangan</span>
    </a>
  </li>
    
@endif
<li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('bantuan') }}">
            <i class="bi bi-question-circle-fill"></i>
            <span>Bantuan</span>
        </a>
    </li><!-- End Dashboard Nav -->


</aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle-dasbor">
            <h1>Penambahan Laporan Keuangan</h1>
            <nav>
                <p></p>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
      <div class="col-xl col-md">
        <div class="row">
       
    

           <!-- Default Card -->
           <div class="col-12">
            <div class="card">
              <div class="card-body">
              <h6 class="card-title-form">Formulir Penambahan Laporan Keuangan</h6>
              <h5 class="card-subtitle-form">Isilah Data Berikut Dengan Benar!</h5>

              <!-- General Form Elements -->
              <!-- Multi Columns Form -->
              <form action="/masukdatakeuangan" method="POST" enctype="multipart/form-data">
                @csrf
              <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputNama5" class="form-label" >Transaksi</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Transaksi" id="inputNama5" name="transaksi" required>
                </div>
                <div class="col-md-12">
                    <label for="inputpekerjaan5" class="form-label" name="tipe_dana" >Tipe Transaksi</label>
                    <select id="inputpekerjaan5" class="form-select"name="tipe_dana" required >
                        <option selected>Pilih Salah Satu...</option>
                        <option value="Debit">Debit</option>
                        <option value="Kredit">Kredit</option>
                        <option value="Saldo">Saldo</option>
                        
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputnokk5" class="form-label">Nominal (Masukkan Hanya Angka Dan Titik, Contoh: 50.000)</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nominal" id="inputnokk5s" name="nominal" required>
                    <div id="warning-message" style="color: red; display: none;">Masukkan hanya angka dan titik (.)</div>
                </div>
                
                <script>
                    // Get the input field and the warning message element
                    const inputNominal = document.getElementById('inputnokk5s');
                    const warningMessage = document.getElementById('warning-message');
                
                    // Add event listener to the input field
                    inputNominal.addEventListener('input', function (event) {
                        // Remove any non-numeric characters except for dot (.)
                        let cleanedInput = event.target.value.replace(/[^\d.]/g, '');
                
                        // Add the decimal point (.) after every three digits from the right
                        cleanedInput = cleanedInput.replace(/\B(?=(\d{3})+(?!\d)(\.))/g, '.');
                
                        // Set the formatted value back to the input field
                        event.target.value = cleanedInput;
                
                        // Show the warning message if the input is not a valid number format
                        if (!/^\d+(\.\d{0,2})?$/.test(cleanedInput)) {
                            warningMessage.style.display = 'block';
                        } else {
                            warningMessage.style.display = 'none';
                        }
                    });
                </script>
                
                
                
                <div class="text-end">
                <!-- Basic Modal -->
                <button type="button" class="btn btn-pengajuan update">Tambah Data</button>

              
              </form><!-- End Multi Columns Form -->
              
            </div>
            

          </div> <!--End Jenis Surat-->
          
         
  
          

          </div>
        </div>
    </section>

  </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{asset('dashboard_asset/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>    
    <script src="{{asset('dashboard_asset/assets/js/main.js')}}"></script>
    <script>
  $('.update').click(function (event) {
    event.preventDefault(); // Prevent default form submission behavior

    var agendasid = $(this).data('id');
    var namaagenda = $(this).data('nama');

    Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Apakah Anda Yakin, Sudah Mengisi Data Dengan Benar?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Sudah Benar!'
    }).then((result) => {
      if (result.isConfirmed) {
        // Get the form element containing the data
        var form = $(this).closest('form');
        
        // Submit the form
        form.submit();
      }
    });
  });
</script>
    


</body>

</html>