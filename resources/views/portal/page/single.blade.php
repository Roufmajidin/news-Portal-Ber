@extends('portal.master.index')
@section('title', 'Add Berita')
@section('content')

    <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
                @php
                    $str = rand();
                    $result = md5($str);
                @endphp

                @foreach ($d as $i)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{ asset('storage/' . $i->foto) }}" alt="">
                            <a href="#" class="blog_item_date">
                                <h6>{{ $i->created_at->diffForHumans() }}</h6>

                            </a>
                        </div>

                        <div class="blog_details">

                            <a class="d-inline-block" href="/{{ $i->slug }}/{{ $i->id }}">
                                <h2>{{ $i->judul_berita }}</h2>
                            </a>
                            <p>{{ Str::limit($i->isi_berita, 200) }}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> {{$i->lope  }}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                @endforeach


                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="blog_right_sidebar">
                {{-- iklan A --}}
                <aside class="single_sidebar_widget search_widget">

                    {{-- @foreach ($d as $i)
                   {{$i->iklan}}
                        @endforeach --}}
                </aside>

                {{-- end iklan --}}


                {{-- section kategori --}}
                <aside class="single_sidebar_widget post_category_widget">
                    <h4 class="widget_title">Kategori</h4>
                    <ul class="list cat-list">
                        @foreach ($b as $kat)
                            <li>
                                <a href="#" class="d-flex">
                                    <p>{{ $kat->nama_kategori }}</p>
                                    <p>{{ $kat->judul_berita }}</p>
                                </a>
                            </li>
                        @endforeach





                    </ul>
                </aside>



                {{-- updated post last --}}
                <aside class="single_sidebar_widget popular_post_widget">
                    <h3 class="widget_title">Recent Post</h3>
                    @foreach ($lp as $i)
                        <div class="media post_item">

                            <img width="50px" src="{{ asset('storage/' . $i->foto) }}" alt="post">
                            <div class="media-body">
                                <a href="{{$i->slug}}/{{$i->id}}">
                                    <h3>{{ $i->slug }}</h3>
                                </a>
                                <p>{{ $i->updated_at }}</p>
                            </div>

                        </div>
                    @endforeach

                </aside>
                {{-- end --}}


                {{-- tag --}}
                <aside class="single_sidebar_widget tag_cloud_widget">
                    <h4 class="widget_title">Tag Clouds</h4>
                    <ul class="list">
                        @foreach ($t as $i)
                            <li>
                                <a href="/lihat/{{$i->id}}/">{{$i->nama_tag}}</a>
                            </li>
                        @endforeach

                    </ul>
                </aside>

                {{-- end tag --}}

                {{-- opsional bae --}}
                <aside class="single_sidebar_widget instagram_feeds">
                    <h4 class="widget_title">Instagram Feeds</h4>
                    <ul class="instagram_row flex-wrap">
                        <li>
                            <a href="#">
                                <img class="img-fluid" src="img/post/post_5.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-fluid" src="img/post/post_6.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-fluid" src="img/post/post_7.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-fluid" src="img/post/post_8.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-fluid" src="img/post/post_9.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-fluid" src="img/post/post_10.png" alt="">
                            </a>
                        </li>
                    </ul>
                </aside>
                {{-- end opsi --}}

                {{-- iklan --}}
                <aside class="single_sidebar_widget newsletter_widget">
                    <h4 class="widget_title">Newsletter</h4>

                    <form action="#">
                        <div class="form-group">
                            <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">Subscribe</button>
                    </form>
                </aside>
                {{-- end iklan --}}
            </div>




        @endsection
