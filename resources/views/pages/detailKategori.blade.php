@extends('master.layouts')
@section('title', 'Detail Kategori')
@section('content')
    {{-- @if (session()->has('message'))
    <div class="alert alert-success ">
        {{ session()->get('message') }}
    </div>
@endif --}}
    <div class="card">
        <div class="card-header pb-0">
            <h5>@yield('title')</h5><span>{{ $k->nama_kategori }}</span>
        </div>

    </div>
    {{-- <div class="card-body float-right">
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat"
            data-whatever="@mdo">Add Berita</button>
    </div> --}}

    {{-- modal show --}}
    <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Add Kategori</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add-kategori" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama Kategori</label>
                            <input class="form-control" type="text" value="" name="nama_kategori">
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Input</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    {{-- update --}}


    {{-- end Modal --}}
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Berita</th>
                    <th scope="col">Isi Berita</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;

                @endphp
                @foreach ($det as $i)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $i->judul_berita }}</td>
                        <td>{{ Str::limit($i->isi_berita, 50) }}</td>
                        {{-- <td>Kehidupan</td> --}}
                        <td>
                            <a class="mr-4" href="/delete-kategori/{{ $i->id }}"><i data-feather="trash-2"></i></a>
                            <a href="#edit"><i data-feather="edit"></i></i></a>
                            <a href="/detail/{{ $i->id }}"><i data-feather="eye"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{-- {{ $i->links() }} --}}
    </div>
    {{-- </div>
              </div> --}}
@endsection
