@extends('master.layouts')
@section('title', 'Add Berita')
@section('content')
    <div class="card-header pb-0">
        <h5>Tambah Data Redaksi</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <form>

                    <div class="mb-3">
                        <div class="mb-3 m-form__group">
                            <label class="form-label">Kategori ID</label>
                            @foreach ($k as $i)
                                <label class="d-block" for="edo-ani2">

                                    <input class="radio_animated" id="edo-ani2" type="radio" value="{{ $i->id }}"
                                        name="kategori_id">{{ $i->nama_kategori }}

                                </label>
                            @endforeach


                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Berita</label>

                        <input class="form-control" type="text" name="judul_berita" aria-label="Judul berita">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teaser (Short Isi)</label>

                        <input class="form-control" type="text" name="teaser" aria-label="teaser">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Konten</label>

                        <input class="form-control" type="text" name="foto" aria-label="teaser">
                    </div>
                    <div>
                        <label class="form-label">Isi Berita</label>
                        <textarea class="form-control" name="isi_berita" id="exampleFormControlTextarea4" rows="6"></textarea>
                    </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                <button class="btn btn-light" type="submit">Cancel</button>
            </div>

            <br>


        </div>

    </div>


    </form>



@endsection
