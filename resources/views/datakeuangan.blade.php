<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css" rel="stylesheet">


  <title>Laporan Keuangan : LAYAR</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
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
              <a href="#">Tampilkan Semua</a>
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
          @if(auth()->user()->isAdmin())
              <li class="dropdown-header">
                @if(Auth::user()->foto_profil)
                  <img src="{{ asset ('foto/'.Auth::user()->foto_profil)}}" alt="Profile" class="rounded-circle" width="120" height="120">
                  @else
                  <img src="{{ asset('dashboard_asset/assets/img/no-profile-user.png') }}" alt="Profile" class="rounded-circle">
                  @endif
                  <p></p>
                  <h6>{{ Auth::user()->nama_lengkap }}</h6>
                  <span>Ketua RT</span>
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
            <a class="nav-link collapsed" href="{{ route('janjitemu') }}">
                <i class="bi bi-people-fill"></i>
                <span>Janji Temu</span>
            </a>
        </li><!-- End Profile Page Nav -->


        

        
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
    <a class="nav-link collapsed" href="{{ route('agenda') }}">
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
      <h1>Laporan Keuangan</h1>
      <nav>
        <p></p>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      @if ($message = Session::has('success'))
      <script>
        toastr.success("{{ Session::get('message') }}");
        </script>
@endif
      <div class="col-xl col-md">
        <div class="row">

          <div class="card">
            <div class="card-body pt-3">
                <div class="tab-pane fade show active datapenduduk-kk1" id="datapenduduk-kk1">
                  <h5 class="card-title">Laporan Keuangan</h5>
                  <p class="small fst-italic"></p>
                  
                  
                  <div class="text-start">
                    <a class="btn btn-primary" href="{{ route('tambahdatakeuangan') }}">Tambah Laporan</a>
                    <a href="#" type="button" class="btn btn-danger delete">Hapus Laporan</button></a>
                    
                  </div>
                  
                  
                  

                  <p> </p>
                            <div class="table-responsive datatable">
                              <table id="example1" class="table table-bordered table-striped ">
                                <thead class="table-white align-items-center">
                              
                                  <tr>
                                    <th width="60px"  scope="col" class="text-center">No</th>
                                    <th class="text-center">Tanggal</th>
                                      <th class="text-center">Transaksi</th>
                                      <th colspan="3" class="text-center">Jenis</th>
                                    
                                  <tr>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th class="text-center">Debit</th>
                                      <th class="text-center">Kredit</th>
                                      <th class="text-center">Saldo</th>
                                  </tr>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                @php
  $id=1;

  
  @endphp
                                  @foreach ($data as $index => $row)
                                  <tr>
                                    <th class="number" scope="row">{{ $index + $data->firstItem() }}</th>
                                    <td>{{ \Carbon\Carbon::parse($row->created_at)->locale('id')->isoFormat('dddd, DD-MM-YYYY') }}</td>
                                    <td>{{$row -> transaksi}}</td>
                                    <td>
                                      @if ($row->tipe_dana === 'Debit')
                                      Rp. {{$row -> nominal}},00
                                      @endif
                                  </td>
                                  <td>
                                      @if ($row->tipe_dana === 'Kredit')
                                      Rp. {{$row -> nominal}},00
                                      @endif
                                  </td>
                                  <td>
                                      @if ($row->tipe_dana === 'Saldo')
                                      Rp. {{$row -> nominal}},00
                                      @endif
                                  </td>

                                  
                      
                                    
                                    
                                    
                                    
                                    
                                  
                                  </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    </td>
                                    
                                    
                                  </tr>
                                  @endforeach  
                                  
                                  
                                  
                                </tbody>
                          </table>
                          <div class="table-responsive datatable">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="table-white align-items-center">
                                    <tr>
                                        <th width="200px">Total Pendapatan</th>
                                        <td>Rp. {{ $totalAmount }}</td>
                                    </tr>
                                    <tr>
                                        <th width="200px">Total Pengeluaran</th>
                                        <td>Rp. {{ $totalSpend }}</td>
                                    </tr>
                                    <tr>
                                      <th width="200px">Saldo Tersisa</th>
                                      <td>Rp. {{ $totalMoney }}</td>
                                  </tr>
                                </thead>
                            </table>
                        </div>
                        
                          
                          @if ($data->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($data->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Sebelumnya</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev">Sebelumnya</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
            @if ($page == $data->currentPage())
                <li class="page-item active" aria-current="page">
                    <span class="page-link">{{ $page }}</span>
                </li>
            @else
                @php
                    $queryParameters = request()->query();
                    $queryString = http_build_query(array_merge($queryParameters, ['page' => $page]));
                @endphp
                <li class="page-item">
                    <a class="page-link" href="{{ $url }}{{ empty($queryParameters) ? '?' : '&' }}{{ $queryString }}">{{ $page }}</a>
                </li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($data->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">Selanjutnya</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Selanjutnya</span>
            </li>
        @endif
    </ul>
@endif


                          

                </div>
               </div>
               <!--END KK 1 DATA TABLE-->

                
            </div>
          </div>  
        </div>
      </div>
    </section>

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('dashboard_asset/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>    
    <!-- Template Main JS File -->
    <script src="{{asset('dashboard_asset/assets/js/main.js')}}"></script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  
  
  
</script>
<script>
  // Use SweetAlert to show the confirmation dialog
  $('.delete').click(function (event) {
      event.preventDefault(); // Prevent the default behavior of the link

      Swal.fire({
          title: 'Apakah Anda Yakin?',
          text: "Anda Akan Menghapus Laporan Keuangan Bulan Ini?. Apapun Yang Terhapus, Tidak Bisa Dikembalikan Lagi.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Hapus'
      }).then((result) => {
          if (result.isConfirmed) {
              // If the user confirms, redirect to the deleteAllData route
              window.location = "{{ route('deleteAllData') }}";
          }
      });
  });
</script>

</body>

</html>