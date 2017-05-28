<?php

namespace App\Http\Controllers\Admin;

use App\Models\Konfirmasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KonfirmasiController extends Controller
{
    public function index()
    {
        $konfirmasis = Konfirmasi::all();

        return view('admin.konfirmasi.index', ['konfirmasis' => $konfirmasis]);
    }

    public function show($id)
    {
        $konfirmasi = Konfirmasi::findOrFail($id);

        if (!$konfirmasi) {
            abor(404);
        }

        return view('admin.konfirmasi.single', ['konfirmasi' => $konfirmasi]);
    }

    public function confirm($id)
    {
        $konfirmasi = Konfirmasi::findOrFail($id);

        if (!$konfirmasi) {
            abort(404);
        }

        $konfirmasi->id_admin = request()->session()->get('id_admin');
        $konfirmasi->status = 1;
        $konfirmasi->save();

        return redirect('admin/konfirmasi')->with('success', 'Success confirm');
    }

    public function destroy($id)
    {
        $konfirmasi = Konfirmasi::findOrFail($id);

        if (!$konfirmasi) {
            abort(404);
        }
        $konfirmasi->delete();
        return redirect('admin/konfrimasi')->with('error', 'Deleted successfully!');
    }
}
