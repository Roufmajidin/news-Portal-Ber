<?php

namespace App\Http\Controllers;

use App\Models\Detail_kategori;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $k = Kategori::all();
        return view('pages.addBerita', compact('k'));
    }


    public function store(Request $request)
    {
        $file_nm = $request->file->getClientOriginalName();
        $image = $request->file->storeAs('thumbnail', $file_nm);

        $p = new Detail_kategori();
        $p->kategori_id = $request->kategori_id;
        $p->judul_berita = $request->judul_berita;
        $p->isi_berita = $request->isi_berita;
        $p->teaser = $request->teaser;
        $p->foto = $image;

        $p->save();

        return redirect('/tambah-berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $d = Detail_kategori::find($id);

        // dd($d);
        return view('pages.detailBerita', compact('d'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
