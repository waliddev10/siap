@extends('layouts.app')

@section('title', 'Kalender Penugasan')
@section('title.category', 'General')

@section('content')
<div class="row second-chart-list third-news-update">
    <div class="col-xl-3 col-lg-6 xl-50 calendar-sec box-col-6">
        <div class="card gradient-primary o-hidden">
            <div class="card-body">
                <div class="default-datepicker">
                    <div class="datepicker-here" data-language="en"></div>
                </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span
                            class="dots dots1"></span><span class="dots dots2 dot-small"></span><span
                            class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span
                            class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span
                            class="dots dots7 dot-small-semi"></span><span
                            class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                        </span></span></span>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-6 xl-50 box-col-6">
        <div class="row mb-3">
            <div class="col-xl-12 col-lg-12 box-col-12">
                <h4>Penugasan Bulan ---</h4>
            </div>
        </div>
        <div class="card">
            <div class="job-search">
                <div class="card-body">
                    <div class="media"><img class="img-40 img-fluid m-r-20" src="../assets/images/job-search/1.jpg"
                            alt="">
                        <div class="media-body">
                            <h6 class="f-w-600"><a href="#" data-bs-original-title="" title="">UI/UX IT Frontend
                                    Developer</a><span class="badge badge-primary pull-right">New</span></h6>
                            <p>(L6) Salt Lake City, UT<span><i class="fa fa-star font-warning"></i><i
                                        class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i
                                        class="fa fa-star font-warning"></i><i
                                        class="fa fa-star font-warning"></i></span></p>
                        </div>
                    </div>
                    <p>
                        We are looking for an experienced and Cuba designer and/or frontend engineer with expertise
                        in accessibility to join our team ,
                        3+ years of experience working in as a Frontend Engineer or comparable role. You won’t be a
                        team of one though — you’ll be collaborating closely with other...
                    </p>
                </div>
            </div>
        </div>
        <div class="card ribbon-vertical-left-wrapper">
            <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-secondary"><i
                    class="icofont icofont-love"></i></div>
            <div class="job-search">
                <div class="card-body">
                    <div class="media"><img class="img-40 img-fluid m-r-20" src="../assets/images/job-search/3.jpg"
                            alt="">
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
        </div>
    </div>
</div>
@endsection
