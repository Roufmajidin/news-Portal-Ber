@extends('portal.master.index')
@section('title', 'detail')
@section('content')

    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="mr-3">
                                    <img width="90px" src="{{ asset('storage/' . $b->foto) }}" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="#">
                                        <h4>{{ $b->judul_berita }}</h4>
                                    </a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>{{ $b->judul_berita }}</h4>
                            <p>{!! $b->isi_berita !!}</p>
                        </div>


                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Most Popular</h3>
                        </div>
                        <div class="job_content">

                            <ul>
                                @foreach ($lp as $item)
                                    <li><a href="/{{ $item->slug }}/{{ $item->id }}">{{ $item->slug }}</a>,
                                        <span>{{ $item->created_at->diffForHumans() }}</span></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Most Popular</h3>
                        </div>
                        <div class="job_content">

                            <ul>
                                @foreach ($d as $item)
                                    <li><a href="/{{ $item->slug }}/{{ $item->id }}">{{ $item->slug }}</a>,
                                        <h6>{{ $item->created_at->diffForHumans() }}</h6></li>
                                @endforeach

                            </ul>
                        </div>


                </div>

                </div>


            </div>
        </div>
    @endsection
