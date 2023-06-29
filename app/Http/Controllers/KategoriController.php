<?php

namespace App\Http\Controllers;

use App\Models\Detail_kategori;
use App\Models\Kategori;
use Egulias\EmailValidator\Result\Reason\DetailedReason;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all data kateogri berita

        $k = Kategori::with('detail_kategori')->paginate(5);

        return view('pages.tabelKategori', compact('k'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        $p = new Kategori();
        $p->nama_kategori = $request->nama_kategori;

        $p->save();

        return redirect('/kategori-berita')->with('message', 'The success message!');
    }
    public function show($id)
    {
        //
        $det = Detail_kategori::with('kategori')->where('kategori_id', $id)->get();
        $k = Kategori::find($id);
        // dd($det);
        return view('pages.detailKategori', compact('det', 'k'));
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


    public function destroy($id)
    {
        //
        $k = Kategori::where('id', $id);
        $k->delete();
        return redirect('/kategori-berita')->with('message', 'The success message!');
    }
    public function destroyd($id)
    {
        //

        $k = Detail_kategori::where('id', $id);
        $k->delete();
        return redirect('/kategori-berita')->with('message', 'The success message!');
    }
}
