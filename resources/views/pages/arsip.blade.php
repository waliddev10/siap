@extends('layouts.app')

@section('title', 'Arsip Penugasan')
@section('title.category', 'General')

@section('content')
<div class="row">
    <div class="col-xl-3 box-col-6 pe-0">
        <div class="file-sidebar">
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li>
                            <div class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>Telaahan Staf</div>
                        </li>
                        <li>
                            <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                    <path
                                        d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                    </path>
                                </svg>Surat Perintah Tugas</div>
                        </li>
                        <li>
                            <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>Daftar Absensi</div>
                        </li>
                        <li>
                            <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>Laporan Hasil</div>
                        </li>
                        <li>
                            <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12" y2="16"></line>
                                </svg>Cost Sheet</div>
                        </li>
                    </ul>
                    <hr>
                    <ul>
                        <li>
                            <div class="m-t-15">
                                <div class="progress sm-progress-bar mb-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Total 25 GB telah digunakan</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-md-12 box-col-12">
        <div class="file-content">
            <div class="card">
                <div class="card-header">
                    <div class="media">
                        <form class="form-inline" action="#" method="get">
                            <div class="form-group mb-0"> <i class="fa fa-search"></i>
                                <input class="form-control-plaintext" type="text" placeholder="Cari berkas di sini..."
                                    data-bs-original-title="" title="">
                            </div>
                        </form>
                        <div class="media-body text-end">
                            <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data"
                                name="myForm">
                                <div class="btn btn-primary" onclick="getFile()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-upload">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" y1="3" x2="12" y2="15"></line>
                                    </svg>
                                    Unggah Berkas
                                </div>
                                <div style="height: 0px;width: 0px; overflow:hidden;">
                                    <input id="upfile" type="file" onchange="sub(this)" data-bs-original-title=""
                                        title="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body file-manager">
                    <h4 class="mb-3">Semua Berkas</h4>
                    <h6>Terakhir unggah</h6>
                    <ul class="files">
                        <li class="file-box">
                            <div class="file-top"> <i class="fa fa-file-image-o txt-primary"></i><i
                                    class="fa fa-ellipsis-v f-14 ellips"></i></div>
                            <div class="file-bottom">
                                <h6>Logo.psd </h6>
                                <p class="mb-1">2.0 MB</p>
                            </div>
                        </li>
                        <li class="file-box">
                            <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i><i
                                    class="fa fa-ellipsis-v f-14 ellips"></i></div>
                            <div class="file-bottom">
                                <h6>Project.zip </h6>
                                <p class="mb-1">1.90 GB</p>
                            </div>
                        </li>
                        <li class="file-box">
                            <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i><i
                                    class="fa fa-ellipsis-v f-14 ellips"></i></div>
                            <div class="file-bottom">
                                <h6>Backend.xls</h6>
                                <p class="mb-1">2.00 GB</p>
                            </div>
                        </li>
                        <li class="file-box">
                            <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i><i
                                    class="fa fa-ellipsis-v f-14 ellips"></i></div>
                            <div class="file-bottom">
                                <h6>requirements.txt </h6>
                                <p class="mb-1">0.90 KB</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
