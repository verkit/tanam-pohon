<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use App\LahanCiri;

class LahanCiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciri = LahanCiri::all();
        return view('admin.lahan.ciri.index', compact('ciri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.lahan.ciri.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ciri' => 'required',
            'kategori' => 'nullable',
            'bobot' => 'required'
        ]);

        LahanCiri::create([
            'ciri' => $request->ciri,
            'kategori_id' => $request->kategori,
            'bobot' => $request->bobot
        ]);

        return redirect('/lahan/ciri')->with('status', 'Ciri-ciri berhasil ditambahkan');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ciri = LahanCiri::findOrFail($id);
        $kategoris = Kategori::all();
        return view('admin.lahan.ciri.edit', compact('ciri', 'kategoris'));
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
        $request->validate([
            'ciri' => 'required',
            'kategori' => 'nullable',
            'bobot' => 'required'
        ]);

        LahanCiri::where('id', $id)->update([
            'ciri' => $request->ciri,
            'kategori_id' => $request->kategori,
            'bobot' => $request->bobot
        ]);

        return redirect('/lahan/ciri')->with('status', 'berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LahanCiri::destroy($id);
        return redirect('/lahan/ciri')->with('status', 'ciri-ciri berhasil dihapus');
    }

    public function store_kategori(Request $request){
        $request->validate([
            'kategori' => 'required|regex:/^[a-zA-Z]+$/u|unique:kategoris,kategori'
        ]);

        Kategori::create([
            'kategori' => $request->kategori
        ]);

        return redirect()->route('lahan.ciri.create')->with('status', 'berhasil menambah kategori');
    }
}
