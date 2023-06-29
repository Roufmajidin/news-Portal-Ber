<?php

namespace App\Http\Controllers;

use App\Models\Detail_kategori;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class BeritaController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }
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
        // $kategori =
        $file_nm = $request->file->getClientOriginalName();
        // $image = $request->file->storeAs('thumbnail', $file_nm);
        $image = $request->file->move('thumbnail',  $file_nm);

        $slugs = Kategori::find($request->kategori_id);
        $p = new Detail_kategori();
        $p->kategori_id = $request->kategori_id;
        $p->judul_berita = $request->judul_berita;
        $p->isi_berita = $request->isi_berita;
        $p->teaser = $request->teaser;
        $p->status = $request->status;
        $p->status = $request->status;
        $p->foto = $image;
        $p->slug = $slugs->nama_kategori;

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
        $k = Detail_kategori::find($id);
        return view('pages.edit-berita', compact('k'));

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
        $file_nm = $request->file->getClientOriginalName();
        // $image = $request->file->storeAs('thumbnail', $file_nm);
        $image = $request->file->move('thumbnail',  $file_nm);

        $r = $request->kategori_id;

        $d = Detail_kategori::where('id', $id)->first();
        $d->judul_berita = $request->judul_berita;
        $d->kategori_id = $request->kategori_id;
        $d->status = $request->status;
        $d->teaser = $request->teaser;
        $d->isi_berita = $request->isi_berita;
        $d->foto = $image;


        $d->update();



        // Toastr::success('Mengedit d ', 'sukses', ["positionClass" => "toast-top-right"]);

        return redirect('/detail-kategori/'. $r);

    }
     public function tag($id)
    {
        //
        // $id =
        // $i = Detail_kategori::where('slug', $slug)->find($id);
        // $id = 7;


        // $b = Detail_kategori::find($id);
        $d = Tag::with('detail_kategori')->where('tag_id', $id)->get();

        // dd($d);

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
