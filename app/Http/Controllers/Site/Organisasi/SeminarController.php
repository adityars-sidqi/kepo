<?php

namespace App\Http\Controllers\Site\Organisasi;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_organisasi = request()->session()->get('id_organisasi');
        $seminars = Seminar::where('id_organisasi', $id_organisasi)->get();

        return view('dashboardorganisasi.seminar.index', ['seminars' => $seminars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardorganisasi.seminar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'judul' => 'required|unique:seminars',
        'tgl_seminar' => 'required|date',
        'tempat' => 'required',
        'deskripsi' => 'required',
        'tiket_tersedia' => 'required|numeric|min:1',
        'harga' => 'required|numeric|min:1',
        'gambar' => 'required|mimes:jpeg,jpg,png|max:5000',
        'id_kategori' => 'required'
      ]);

        //upload file
        $judul = strtolower(str_slug($request->judul, '-'));
        $filename = $judul . '-' . time() .  '.png';
        Storage::putFileAs('seminar', new File($request->file('gambar')), $filename);

        $seminar = new Seminar;
        $seminar->judul = $request->judul;
        $seminar->tgl_seminar = $request->tgl_seminar;
        $seminar->tempat = $request->tempat;
        $seminar->deskripsi = $request->deskripsi;
        $seminar->tiket_tersedia = $request->tiket_tersedia;
        $seminar->harga = $request->harga;
        $seminar->gambar = $filename;
        $seminar->slug = $judul;
        $seminar->id_kategori = $request->id_kategori;
        $seminar->id_organisasi = $request->session()->get('id_organisasi');
        $seminar->timestamps = false;

        $seminar->save();
        $request->session()->flash('alert-success', 'Seminar added successfully!');
        return redirect(asset('dashboard/seminar/'));
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
        $seminar = Seminar::where('slug', $id)->first();
        if (!$seminar) {
            return abort(404);
        }
        return view('dashboardorganisasi.seminar.edit', ['seminar' => $seminar]);
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
        $this->validate($request, [
          'judul' => 'required',
          'tgl_seminar' => 'required|date',
          'tempat' => 'required',
          'deskripsi' => 'required',
          'tiket_tersedia' => 'required|numeric|min:1',
          'harga' => 'required|numeric|min:1',
          'gambar' => 'nullable|mimes:jpg,jpeg,png|max:2000',
          'id_kategori' => 'required',
        ]);

        $seminar = Seminar::find($id);
        $seminar->judul = $request->judul;
        $seminar->tgl_seminar = $request->tgl_seminar;
        $seminar->tempat = $request->tempat;
        $seminar->deskripsi = $request->deskripsi;
        $seminar->tiket_tersedia = $request->tiket_tersedia;
        $seminar->harga = $request->harga;
        if (!is_null($request->gambar)) {
            //upload file
            Storage::delete('seminar/'. $seminar->gambar);
            $judul = strtolower(str_slug($request->judul, '-'));
            $filename = $judul . '-' . time() .  '.png';
            Storage::putFileAs('seminar', new File($request->file('gambar')), $filename);
            $seminar->gambar = $filename;
        }
        $seminar->id_kategori = $request->id_kategori;
        $seminar->id_organisasi = $request->session()->get('id_organisasi');
        $seminar->timestamps = false;
        $seminar->save();
        $request->session()->flash('alert-success', 'Seminar edited successfully!');

        return redirect(asset('dashboard/seminar/'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seminar = Seminar::find($id);
        Storage::delete('seminar/'. $seminar->gambar);
        $seminar->delete();
        request()->session()->flash('alert-success', 'Seminar deleted successfully!');
        return redirect(asset('dashboard/seminar/'));
    }
}
