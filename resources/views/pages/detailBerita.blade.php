@extends('master.layouts')
@section('title', 'Berite')
@section('content')

<div class="row">


                  <!-- Bookmark Ends-->

          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="blog-single">
                  <div class="blog-box blog-details">
                    <div class="banner-wrraper"><img class="img-fluid w-100 bg-img-cover" src="{{asset('storage/'.$d->foto) }}" alt="blog-main"></div>
                    <div class="card">
                      <div class="card-body">
                        <div class="blog-details">
                          <ul class="blog-social">
                            <li>{{$d->updated_at}}</li>
                            <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
                            <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
                            <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                          </ul>
                          <h4>
                           {{$d->judul_berita}}
                          </h4>
                          <div class="single-blog-content-top">
                            <p>{{$d->isi_berita}}</p>
                            {{-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p> --}}
                          </div>
                        </div>





@endsection
