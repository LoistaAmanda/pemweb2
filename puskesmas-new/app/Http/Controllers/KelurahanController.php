<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_kelurahan = Kelurahan::all();
        return view('admin.kelurahan.index', compact('list_kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string'
        ]);

        Kelurahan::create($validated);
        return redirect('dashboard/kelurahan')->with('pesan','Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('admin.kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('admin.kelurahan.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string'
        ]);

        $kelurahan = Kelurahan::find($id);
        $kelurahan->update($validated);

        return redirect('dashboard/kelurahan')->with('pesan','Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();

        return redirect('dashboard/kelurahan')->with('pesan','Data Berhasil di Hapus');
    }
}
