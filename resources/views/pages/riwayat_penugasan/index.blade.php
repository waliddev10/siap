@extends('layouts.app')

@section('title', 'Riwayat Penugasan')
@section('title.category', 'General')

@section('content')
<div class="row mb-3">
    <div class="col-xl-12 col-lg-12 box-col-12">
        <h3>Riwayat Penugasan</h3>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <form id="filter" class="form-inline">
            <div class="mr-2">
                <select name="order_by" class="form-control">
                    <option selected value="tgl_mulai">Tanggal Mulai</option>
                    <option value="tgl_selesai">Tanggal Selesai
                    <option value="nama">Nama Penugasan
                    </option>
                </select>
            </div>
            <div class="mr-2">
                <select name="sort" class="form-control">
                    <option value="asc" selected>Asc
                    <option value="desc">Desc
                    </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-filter fa-fw"></i> Filter</button>
        </form>
    </div>
    <div id="list" class="col-xl-12 col-lg-12 box-col-12">
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function (){
        loadList();
    });
    function loadList() {
        var container = $('#list');
        $.ajax({
            url: '{{ route('riwayat_penugasan.index') }}',
            data: $('#filter').serialize(),
            type: 'GET',
            beforeSend: function() {
                container.html(setLoader())
            },
            success: function(response){
                container.html(response)
            }
        });
    }
    $('#filter').on('submit', function(e) {
        e.preventDefault();
        loadList();
    });
</script>
@endpush
