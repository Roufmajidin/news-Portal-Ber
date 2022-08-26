<?php

namespace App\Http\Controllers;

use App\Models\Detail_kategori;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $p = Detail_kategori::all();
        $b = Kategori::with('detail_kategori')->get();
        $d = Detail_kategori::all();

        $lp = Detail_kategori::latest()->take(2)->get();
        $t = Tag::all();
        // take() method is equivalent to limit() method


        return view('portal.page.single', compact('b', 'd', 'lp', 't'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $id)
    {
        //
        // $id =
        // $i = Detail_kategori::where('slug', $slug)->find($id);
        // $id = 7;
        $d = Detail_kategori::all();
        $lp = Detail_kategori::latest()->take(2)->get();

        $b = Detail_kategori::find($id);
        // dd($b);
        return view('portal.page.detail-page', compact('b', 'd', 'lp'));
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
