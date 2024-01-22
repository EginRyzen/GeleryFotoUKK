<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $galery = Galery::where('iduser', $user->id)->latest()->get();

        return view('Galery.timeline', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $request->validate([
            'foto' => 'required'
        ]);

        $nfile = date('YmdHis') . "." . $request->foto->getClientOriginalExtension();
        // dd($nfile);
        // $nfile = $request->file('foto')->getClientOriginalName();
        // dd($nfile);

        $request->foto->move(public_path('image'), $nfile);

        Galery::create([
            'iduser' => $user->id,
            'foto' => $nfile,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => now(),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        Galery::where('id', $id)->delete();

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->input());

        $file = $request->foto;

        if (isset($file)) {

            $nfile = date('YmdHis') . "." . $request->foto->getClientOriginalExtension();
            // dd($nfile);

            $request->foto->move(public_path('image'), $nfile);
            $data  = [
                'foto' => $nfile,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ];

            // dd($data);

            Galery::where('id', $id)->update($data);
        } else {
            $data  = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ];

            // dd($data);

            Galery::where('id', $id)->update($data);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        //
    }
}
