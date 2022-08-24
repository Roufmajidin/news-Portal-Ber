@extends('master.layouts')
@section('title', 'Kategori Berita')
@section('content')
    {{-- @if (session()->has('message'))
    <div class="alert alert-success ">
        {{ session()->get('message') }}
    </div>
@endif --}}
    <div class="card">

        {{-- <div class="card-header"> --}}
        {{-- <h5>Hoverable rows</h5><span>Use a class <code>table-hover</code> to enable a hover state on table rows within a <code>tbody</code>.</span> --}}
    </div>
    <div class="card-body float-right">
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalfat"
            data-whatever="@mdo">Add Kategori</button>
    </div>

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
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;

                @endphp
                @foreach ($k as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama_kategori }}</td>
                        {{-- <td>Kehidupan</td> --}}
                        <td>
                            <a class="mr-4" href="/delete-kategori/{{ $item->id }}"><i data-feather="trash-2"></i></a>
                            <a href="#edit"><i data-feather="edit"></i></i></a>
                            <a href="/detail-kategori/{{$item->id}}"><i data-feather="eye"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $k->links() }}
    </div>
    {{-- </div>
              </div> --}}
@endsection
