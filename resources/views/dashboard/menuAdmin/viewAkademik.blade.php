@extends('dashboard.layouts.utama')

@section('container')
    <div class="left-side-bar">

        <p class="text-light text-center">Politeknik Negeri Banjarmasin</p>
        <img class="rounded mx-auto d-block mb-3" src="/gambar/poliban.png" alt="Logo" width="95">

        <div class="menu-block
                customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-grid"></span><span class="mtext">Dashboard</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="/dashboardAdmin">Bebas Masalah Umum</a></li>
                            <li>
                                <a href="/dashboardAdmin/statusAkademik">Bebas Masalah Akademik</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-notepad-2"></span><span class="mtext">Daftar Akun</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="/dashboardAdmin/akunMahasiswa">Mahasiswa</a></li>
                            <li>
                                <a href="/dashboardAdmin/akunPanitia">Panitia</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/dashboardAdmin/beritaUtama" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-newspaper-1"></span><span class="mtext">Berita Utama</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-8">
            <div class="text-center mb-30">
                <h4>Detail Dokumen Akademik</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>KHS Semester 1</h5>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <iframe src="{{ asset('storage/' . $akademik->khs_semester_1) }}" width="350px"
                            height="500px"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>KHS Semester 2</h5>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <iframe src="{{ asset('storage/' . $akademik->khs_semester_2) }}" width="350px"
                            height="500px"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>KHS Semester 3</h5>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <iframe src="{{ asset('storage/' . $akademik->khs_semester_3) }}" width="350px"
                            height="500px"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>KHS Semester 4</h5>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <iframe src="{{ asset('storage/' . $akademik->khs_semester_4) }}" width="350px"
                            height="500px"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>KHS Semester 5</h5>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <iframe src="{{ asset('storage/' . $akademik->khs_semester_5) }}" width="350px"
                            height="500px"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>KHS Semester 6</h5>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <iframe src="{{ asset('storage/' . $akademik->khs_semester_6) }}" width="350px"
                            height="500px"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>Lembar SP</h5>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <iframe src="{{ asset('storage/' . $akademik->lembar_sp) }}" width="350px" height="500px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
