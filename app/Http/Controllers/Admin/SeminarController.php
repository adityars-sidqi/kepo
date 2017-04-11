<?php

namespace App\Http\Controllers\Admin;

use App\Models\Seminar;
use App\Models\Kategori;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
      $seminars = Seminar::all();
      return view('admin.seminar.index', ['seminars' => $seminars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $organisasis = Organisasi::all();
        return view('admin.seminar.create', ['kategoris' => $kategoris, 'organisasis' => $organisasis]);
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
        'nama_seminar' => 'required',
        'tgl_seminar' => 'required|date',
        'tempat' => 'required',
        'deskripsi' => 'required',
        'jumlah_tiket' => 'required|numeric|min:1',
        'harga' => 'required|numeric|min:1',
        'gambar' => 'required|mimes:jpeg,jpg,png|max:2000',
        'id_kategori' => 'required',
        'id_organisasi' => 'required'
      ]);
      //upload file
      $filename = str_slug($request->nama_seminar, '-') . '-' . time() .  '.png';
      $request->file('gambar')->storeAs('public/seminar',$filename);

      $seminar = new Seminar;
      $seminar->nama_seminar = $request->nama_seminar;
      $seminar->tgl_seminar = $request->tgl_seminar;
      $seminar->tempat = $request->tempat;
      $seminar->deskripsi = $request->deskripsi;
      $seminar->jumlah_tiket = $request->jumlah_tiket;
      $seminar->harga = $request->harga;
      $seminar->gambar = $filename;
      $seminar->id_kategori = $request->id_kategori;
      $seminar->id_organisasi = $request->id_organisasi;
      $seminar->timestamps = false;

      $seminar->save();

      return redirect(asset('admin/seminar/'))->with('success', 'Seminar created successfully!');
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
      $kategoris = Kategori::all();
      $organisasis = Organisasi::all();
      $seminar = Seminar::find($id);

      if(!$seminar){
        abort(404);
      }

      return view('admin.seminar.edit' , ['seminar' => $seminar, 'kategoris' => $kategoris, 'organisasis' => $organisasis]);
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
        'nama_seminar' => 'required',
        'tgl_seminar' => 'required|date',
        'tempat' => 'required',
        'deskripsi' => 'required',
        'jumlah_tiket' => 'required|numeric|min:1',
        'harga' => 'required|numeric|min:1',
        'gambar' => 'nullable|mimes:jpg,jpeg,png|max:2000',
        'id_kategori' => 'required',
        'id_organisasi' => 'required'
      ]);

      $seminar = Seminar::find($id);
      $seminar->nama_seminar = $request->nama_seminar;
      $seminar->tgl_seminar = $request->tgl_seminar;
      $seminar->tempat = $request->tempat;
      $seminar->deskripsi = $request->deskripsi;
      $seminar->jumlah_tiket = $request->jumlah_tiket;
      $seminar->harga = $request->harga;
      if(!is_null($request->gambar)){
      //upload file
      File::delete('storage/seminar/'. $seminar->gambar);
      $filename = str_slug($request->nama_seminar, '-') . time() .  '.png';
      $request->file('gambar')->storeAs('public/seminar',$filename);
      $seminar->gambar = $filename;
      }
      $seminar->id_kategori = $request->id_kategori;
      $seminar->id_organisasi = $request->id_organisasi;
      $seminar->timestamps = false;
      $seminar->save();

      return redirect(asset('admin/seminar/'))->with('success_edit', 'Seminar edited successfully!');
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
      File::delete('storage/seminar/'. $seminar->gambar);
      $seminar->delete();

      return redirect(asset('admin/seminar/'))->with('delete','Seminar deleted successfully!');
    }
}