<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Profil : LAYAR</title>
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
                <h1>Profil</h1>

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

            <li class="nav-item"></a>
                <a class="nav-logo" >
                    
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
                <a class="nav-link" href="{{ route('dashboard') }}">
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
  <a class="nav-link collapsed " href="{{ route('datakeuangan') }}">
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
          <h1>Profil Saya</h1>
          <nav>
            <p></p>
          </nav>
        </div><!-- End Page Title -->
        <section class="section profile">
       
            
            
              <div class="row">
                <div class="col-xl-4">
                    
                  <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        @if(Auth::user()->foto_profil)
                            <img src="{{ asset ('foto/'.Auth::user()->foto_profil)}}" alt="Profile" class="rounded-circle">
                        @else
                            <img src="{{ asset('dashboard_asset/assets/img/no-profile-user.png') }}" alt="Unknown Profile" class="rounded-circle">
                        @endif
                        <p></p>
                        <h2>{{ Auth::user()->nama_lengkap }}</h2>
                        @if(auth()->user()->isPengguna())
                        <h3 style="padding: 8px;">Warga</h3>
                        @else 
                      <h3 style="padding: 8px;">Ketua RT</h3>
                      @endif

                      

                        
                      
                    </div>
                  </div>
                </div>
              
              
              
              
            
              
    
            <div class="col-xl-8">
    
              <div class="card">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
    
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Tentang Saya</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                    </li>
    
                  
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ganti Kata Sandi</button>
                    </li>
    
                  </ul>
                  <div class="tab-content pt-2">
    
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      
                      <h5 class="card-title"></h5>
                     
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                        <div class="col-lg-9 col-md-8">{{ Auth::user()->nama_lengkap }}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">NIK</div>
                        <div class="col-lg-9 col-md-8">@if(Auth::user()->nik)
                            {{ Auth::user()->nik }}
                        @else
                            -
                        @endif</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                        <div class="col-lg-9 col-md-8">@if(Auth::user()->alamat)
                            {{ Auth::user()->alamat }}
                        @else
                            -
                        @endif</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Tempat, Tanggal Lahir</div>
                        <div class="col-lg-9 col-md-8">@if(Auth::user()->tempat_lahir)
                            {{ Auth::user()->tempat_lahir }},
                        @else
                            -
                        @endif
                        @if(Auth::user()->tgl_lahir)
                        {{ Auth::user()->tgl_lahir }}
                    @else
                        -
                    @endif </div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                        <div class="col-lg-9 col-md-8">@if(Auth::user()->jenis_kelamin)
                            {{ Auth::user()->jenis_kelamin }}
                        @else
                            -
                        @endif</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Pekerjaan</div>
                        <div class="col-lg-9 col-md-8">@if(Auth::user()->pekerjaan)
                            {{ Auth::user()->pekerjaan }}
                        @else
                            -
                        @endif</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Agama</div>
                        <div class="col-lg-9 col-md-8">@if(Auth::user()->agama)
                            {{ Auth::user()->agama }}
                        @else
                            -
                        @endif</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">No Telepon</div>
                        <div class="col-lg-9 col-md-8">{{ Auth::user()->no_hp }}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Status Pernikahan</div>
                        <div class="col-lg-9 col-md-8">@if(Auth::user()->status_kawin)
                          {{ Auth::user()->status_kawin }}
                      @else
                          -
                      @endif</div>
                      </div>
    
                    </div>
    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    
                      <!-- Profile Edit Form -->
                      <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                          <div class="col-md-8 col-lg-9" >
                            <input class="form-control" type="file" id="formFile" name="foto" value="{{ asset ('foto/'.Auth::user()->foto_profil)}}">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                          <div class="col-md-8 col-lg-9" >
                            <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" value="{{ Auth::user()->nama_lengkap }}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="nik" type="text" class="form-control" id="nik" value="{{ Auth::user()->nik }}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="alamat" type="text" class="form-control" id="alamat" value="{{ Auth::user()->alamat }}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="tgl-lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="tempat_lahir" type="text" class="form-control" id="tempat" value="{{ Auth::user()->tempat_lahir}}">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tgl-lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                          <div class="col-md-8 col-lg-9">
                              <input type="date" class="form-control" name="tgl_lahir" value="{{ \Carbon\Carbon::parse(Auth::user()->tgl_lahir)->format('Y-m-d') }}" required>
                          </div>
                      </div>
    
                        <div class="row mb-3">
                          <label for="kelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-md-8 col-lg-9">
                              <select id="inputkelamin5" class="form-select" name="jenis_kelamin" required>
                                  <option value="">Pilih Salah Satu...</option>
                                  <option value="Laki-laki" {{ Auth::user()->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                  <option value="Perempuan" {{ Auth::user()->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                              </select>
                          </div>
                      </div>
                      
    
                      <div class="row mb-3">
                        <label for="pekerjaan" class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
                        <div class="col-md-8 col-lg-9">
                            <select id="inputpekerjaan5" class="form-select" name="pekerjaan" required>
                                <option value="">Pilih Salah Satu...</option>
                                <option value="Tidak Bekerja" {{ Auth::user()->pekerjaan === 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                                <option value="Pelajar / Mahasiswa" {{ Auth::user()->pekerjaan === 'Pelajar / Mahasiswa' ? 'selected' : '' }}>Pelajar / Mahasiswa</option>
                                <option value="PNS / TNI / POLRI" {{ Auth::user()->pekerjaan === 'PNS / TNI / POLRI' ? 'selected' : '' }}>PNS / TNI / POLRI</option>
                                <option value="Karyawan Swasta" {{ Auth::user()->pekerjaan === 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta</option>
                                <option value="Wiraswasta" {{ Auth::user()->pekerjaan === 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                                <option value="Pedagang" {{ Auth::user()->pekerjaan === 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                                <option value="Nelayan / Petani" {{ Auth::user()->pekerjaan === 'Nelayan / Petani' ? 'selected' : '' }}>Nelayan / Petani</option>
                                <option value="Pekerja Lepas" {{ Auth::user()->pekerjaan === 'Pekerja Lepas' ? 'selected' : '' }}>Pekerja Lepas</option>
                                <option value="Pensiunan" {{ Auth::user()->pekerjaan === 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
                            </select>
                        </div>
                    </div>
                    
    
                        <div class="row mb-3">
                          <label for="agama" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                          <div class="col-md-8 col-lg-9">
                              <select id="inputagama5" class="form-select" name="agama" required>
                                  <option value="">Pilih Salah Satu...</option>
                                  <option value="Islam" {{ Auth::user()->agama === 'Islam' ? 'selected' : '' }}>Islam</option>
                                  <option value="Kristen" {{ Auth::user()->agama === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                  <option value="Katolik" {{ Auth::user()->agama === 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                  <option value="Buddha" {{ Auth::user()->agama === 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                  <option value="Hindu" {{ Auth::user()->agama === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                  <option value="Konghucu" {{ Auth::user()->agama === 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                              </select>
                          </div>
                      </div>
                      
    
    
                        <div class="row mb-3">
                          <label for="status_kawi" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="no_hp" type="text" class="form-control" id="no_hp" value="{{ Auth::user()->no_hp }}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="status_kawi" class="col-md-4 col-lg-3 col-form-label">Status Perkawinan</label>
                          <div class="col-md-8 col-lg-9">
                            <select id="inputstatusperkawinan5" class="form-select" name="status_kawin" required>
                              <option value="Belum Kawin" {{ Auth::user()->status_kawin == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                              <option value="Sudah Kawin" {{ Auth::user()->status_kawin == 'Sudah Kawin' ? 'selected' : '' }}>Sudah Menikah</option>
                              <option value="Cerai Hidup" {{ Auth::user()->status_kawin == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                              <option value="Cerai Mati" {{ Auth::user()->status_kawin == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                          </select>
                          
                          </div>
                        </div>
    
                       
    
                        <div class="text-end">
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                      </form><!-- End Profile Edit Form -->
    
                    </div>
    
                    
    
    
                    <div class="tab-pane fade pt-3" id="profile-change-password">
                      <!-- Change Password Form -->
                      <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
    
                        <div class="row mb-3">
                          <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Kata Sandi Sebelumnya</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="current_password" type="password" class="form-control" id="currentPassword">
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Kata Sandi Baru</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="newPassword">
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ketik Ulang Kata Sandi</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="password_confirmation" type="password" class="form-control" id="renewPassword">
                          </div>
                        </div>
    
                        <div class="text-end">
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                      </form><!-- End Change Password Form -->
                      @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
    
                    </div>
    
                  </div><!-- End Bordered Tabs -->
    
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

    <!-- Template Main JS File -->
    <script src="{{asset('dashboard_asset/assets/js/main.js')}}"></script>

</body>

</html>