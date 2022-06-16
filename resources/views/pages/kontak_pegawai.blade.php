@extends('layouts.app')

@section('title', 'Kontak Pegawai')
@section('title.category', 'General')

@section('content')
<div class="row second-chart-list third-news-update">
    <div class="col-xl-12 appointment">
        <div class="card">
            <div class="card-header card-no-border">
                <div class="header-top">
                    <h5 class="m-0">Kontak Pegawai</h5>
                    <div class="card-header-right-icon">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @php
                                $selected = $bidang->firstWhere('id', request()->bidang_id);
                                if($selected) {
                                echo $selected->nama;
                                } else {
                                echo 'Semua';
                                }
                                @endphp
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="">
                                <a class="dropdown-item" href="{{ route('kontak_pegawai.index') }}">Semua</a>
                                @foreach ($bidang as $bid)
                                <a class="dropdown-item"
                                    href="{{ route('kontak_pegawai.index', ['bidang_id' => $bid->id]) }}">{{
                                    $bid->nama }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="appointment-table table-responsive">
                    <table class="table table-bordernone">
                        <tbody>
                            @forelse ($user as $u)
                            <tr>
                                <td class="py-2">
                                    <img class="img-fluid img-40 rounded-circle mb-3"
                                        src="{{ asset('assets/images/appointment/app-ent.jpg') }}"
                                        alt="Image description">
                                </td>
                                <td class="img-content-box py-2">
                                    <span class="d-block">{{ $u->nama }}</span>
                                    <span class="font-roboto d-block">{{ $u->nip }}</span>
                                    <p class="m-0 font-primary">{{ $u->pangkat->nama }} {{
                                        $u->pangkat->golongan }}</p>
                                </td>
                                <td class="py-2">
                                    <p class="m-0 font-primary">{{ $u->bidang->nama }}</p>
                                    <span class="text-secondary">{{ $u->jabatan }}</span>
                                </td>
                                <td class="text-end py-2">
                                    <a href="https://wa.me/{{ $u->no_hp }}" class="button btn btn-primary"><i
                                            class="fa fa-whatsapp"></i> Chat</a>
                                </td>
                            </tr>
                            @empty
                            Tidak ada kontak.
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
