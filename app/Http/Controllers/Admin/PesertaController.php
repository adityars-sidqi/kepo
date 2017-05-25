<?php

namespace App\Http\Controllers\Admin;

use App\Models\Peserta;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertas = Peserta::all();
        return view('admin.peserta.index', ['pesertas' => $pesertas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peserta.create');
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
          'tgl_lahir' => 'required|date',
          'jenis_kelamin' => 'required',
          'email' => 'required|unique:pesertas',
          'password' => 'required|min:6',

        ]);

        $peserta = new Peserta;
        $peserta->nama = $request->nama;
        $peserta->tgl_lahir = $request->tgl_lahir;
        $peserta->jenis_kelamin = $request->jenis_kelamin;
        $peserta->email = $request->email;
        $peserta->password = encrypt($request->password);
        $kode_aktivasi = time() . "-" . $request->email;
        $peserta->kode_aktivasi = encrypt($kode_aktivasi);
        $peserta->status = "Nonaktif";
        $peserta->timestamps = false;

        $peserta->save();

        return redirect('admin/peserta')->with('success', 'Peserta created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::find($id);

        if (!$peserta) {
            abort(404);
        }

        return view('admin.peserta.edit')->with('peserta', $peserta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'nama' => 'required',
        'tgl_lahir' => 'required|date',
        'jenis_kelamin' => 'required',
        'email' => 'required',
        'password' => 'required|min:6'
      ]);

        $peserta = Peserta::find($id);
        $peserta->nama = $request->nama;
        $peserta->tgl_lahir = $request->tgl_lahir;
        $peserta->jenis_kelamin = $request->jenis_kelamin;
        $peserta->email = $request->email;
        $peserta->password = encrypt($request->password);
        $peserta->timestamps = false;
        $peserta->save();

        return redirect('admin/peserta')->with('success', 'Peserta edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = Peserta::find($id);
        $peserta->delete();

        return redirect('admin/peserta')->with('error', 'Peserta deleted successfully!');
    }
}
