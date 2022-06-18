@foreach($items as $item)
<div class="card">
    @if(\Carbon\Carbon::parse($item->penugasan->tgl_mulai) <= \Carbon\Carbon::now() && \Carbon\Carbon::parse($item->
        penugasan->tgl_selesai) <= \Carbon\Carbon::now()) <div
            class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i class="fa fa-check-circle"></i></div>
@elseif(\Carbon\Carbon::parse($item->penugasan->tgl_mulai) <= \Carbon\Carbon::now() && \Carbon\Carbon::parse($item->
    penugasan->tgl_selesai) > \Carbon\Carbon::now()) <div
        class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-warning"><i class="fa fa-exclamation-triangle"></i>
    </div>
    @endif

    <div class="job-search">
        <div class="card-body">
            <div class="media">
                <img class="img-40 img-fluid m-r-20" src="{{ asset('assets/images/job-search/1.jpg') }}" alt="">
                <div class="media-body">
                    <h6 class="f-w-600">
                        <a href="javascript:void(0)">{{ $item->penugasan->nama }}</a>

                    </h6>
                    <p class="mb-0">
                        <strong>Dari:</strong> {{ \Carbon\Carbon::parse($item->penugasan->tgl_mulai)
                        ->isoFormat('dddd, D MMMM YYYY') }}
                    </p>
                    <p class="mb-0">
                        <strong>Sampai:</strong> {{ \Carbon\Carbon::parse($item->penugasan->tgl_selesai)
                        ->isoFormat('dddd, D MMMM YYYY') }}
                    </p>
                    <p class="mb-0">
                        <strong>SKPD:</strong> {{ $item->penugasan->skpd->nama }} ({{
                        $item->penugasan->lokasi
                        }})
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="card ribbon-vertical-left-wrapper">
        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-secondary"><i class="icofont icofont-love"></i>
        </div>
        <div class="job-search">
            <div class="card-body">
                <div class="media"><img class="img-40 img-fluid m-r-20" src="../assets/images/job-search/3.jpg" alt="">
                    <div class="media-body">
                        <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">Senior UX
                                designer</a><span class="pull-right">2 days ago</span></h6>
                        <p>Minneapolis, MN<span><i class="fa fa-star font-warning"></i><i
                                    class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i
                                    class="fa fa-star font-warning-half-o"></i><i
                                    class="fa fa-star font-warning-o"></i></span></p>
                    </div>
                </div>
                <p>The designer will apply Lean UX and Design Thinking practices in a highly collaborative,
                    fast-paced, distributed environment You have 4+ years of UX experience. You support UX
                    leadership by providing continuous feedback regarding the evolution of team process
                    standards.</p>
            </div>
        </div>
    </div> --}}
    @endforeach
