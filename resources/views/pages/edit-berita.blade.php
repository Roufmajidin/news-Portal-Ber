@extends('master.layouts')
@section('title', 'Edit Berita')
@section('content')
    <div class="card-header pb-0">
        <h5>Edit Data Redaksi</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <form action="/proses-edit-berita/{{$k->id}}" method="POST" enctype="multipart/form-data">
                   {{ csrf_field ()}}
                  @method('PATCH')
                    <div class="form theme-form">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Judul_berita</label>
                                    <input class="form-control" name="judul_berita" type="text" value="{{$k->judul_berita}}"
                                        placeholder=" Judul Berita *">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label>Kategori</label>
                                    <select class="form-select" name="kategori_id">

                                            <option value="{{$k->kategori_id}}">{{$k->kategori_id}}</option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label>Status</label>
                                    <select class="form-select" name="status">
                                    @if ($k->status == 0)
                                        <option value="{{$k->status}}">Draft</option>
                                        <option value="1">Publish</option>
                                    @elseif($k->status == 1)
                                        <option value="{{$k->status}}">publish</option>
                                        <option value="0">Draft</option>

                                    @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Teaser</label>
                                    <textarea  class="form-control" id="exampleFormControlTextarea4" rows="3" name="teaser" placeholder="max 50 Char" value="">{{$k->teaser}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Isi Berita</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="isi_berita">{{$k->isi_berita}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Upload project file</label>
                                    {{-- <img width="200px" src="{{asset('storage/'.$k->foto) }}"/> --}}
                                    <input class="datepicker-here form-control" type="file" data-language="en" value="{{$k->foto}}"
                                        name="file">


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-secondary me-3">Update</button>

                            </div>
                        </div>



                </form>

            </div>



            <br>


        </div>

    </div>





@endsection
