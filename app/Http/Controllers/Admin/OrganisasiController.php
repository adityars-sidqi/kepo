<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $organisasis = Organisasi::all();
      return view('admin.organisasi.index', ['organisasis' => $organisasis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organisasi.create');
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
        'nama' => 'required',
        'telp' => 'required|numeric',
        'alamat' => 'required',
        'email' => 'required|unique:organisasis',
        'password' => 'required|min:6'
      ]);

      $organisasi = new Organisasi;
      $organisasi->nama = $request->nama;
      $organisasi->telp = $request->telp;
      $organisasi->alamat = $request->alamat;
      $organisasi->email = $request->email;
      $organisasi->password = encrypt($request->password);
      $organisasi->timestamps = false;

      $organisasi->save();

      return redirect(asset('admin/organisasi/'))->with('success', 'Organisasi created successfully!');
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
      $organisasi = Organisasi::find($id);

      if(!$organisasi){
        abort(404);
      }

      return view('admin.organisasi.edit')->with('organisasi', $organisasi);
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
        'nama' => 'required',
        'telp' => 'required|numeric|max:12',
        'alamat' => 'required',
        'email' => 'required',
        'password' => 'required|min:6'
      ]);


      $organisasi = Organisasi::find($id);
      $organisasi->nama = $request->nama;
      $organisasi->telp = $request->telp;
      $organisasi->alamat = $request->alamat;
      $organisasi->email = $request->email;
      $organisasi->password = encrypt($request->password);
      $organisasi->timestamps = false;

      $organisasi->save();

      return redirect(asset('admin/organisasi/'))->with('success_edit', 'Organisasi edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $organisasi = Organisasi::find($id);
      $organisasi->delete();

      return redirect(asset('admin/organisasi/'))->with('delete','Organisasi deleted successfully!');
    }
}
