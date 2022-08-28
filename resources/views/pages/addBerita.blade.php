@extends('master.layouts')
@section('title', 'Add Berita')
@section('content')
    <div class="card-header pb-0">
        <h5>Tambah Data Redaksi</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <form action="/proses-tambah-berita" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form theme-form">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Judul_berita</label>
                                    <input class="form-control" name="judul_berita" type="text"
                                        placeholder=" Judul Berita *">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label>Kategori</label>
                                    <select class="form-select" name="kategori_id">
                                        @foreach ($k as $i)
                                            <option value="{{ $i->id }}">{{ $i->nama_kategori }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label>Status</label>
                                    <select class="form-select" name="status">
                                        <option value="0">Draft</option>
                                        <option value="1">Publish</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Teaser</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="teaser" placeholder="max 50 Char"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Isi Berita</label>
                                    <textarea class="form-control" id="editor" rows="3" name="isi_berita"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Upload project file</label>
                                    <input class="datepicker-here form-control" type="file" data-language="en"
                                        name="file">


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-secondary me-3">Tambah</button>

                            </div>
                        </div>



                </form>

            </div>



            <br>


        </div>

    </div>





@endsection
