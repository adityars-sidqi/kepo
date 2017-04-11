<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
          'email' => 'required|unique:users',
          'password' => 'required|min:6'
        ]);

        $user = new User;
        $user->nama = $request->nama;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->email = $request->email;
        $user->password = encrypt($request->password);
        $user->timestamps = false;

        $user->save();

        return redirect(asset('admin/user/'))->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);

      if(!$user){
        abort(404);
      }

      return view('admin.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\User  $user
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

      $user = User::find($id);
      $user->nama = $request->nama;
      $user->tgl_lahir = $request->tgl_lahir;
      $user->jenis_kelamin = $request->jenis_kelamin;
      $user->email = $request->email;
      $user->password = encrypt($request->password);
      $user->timestamps = false;
      $user->save();

      return redirect(asset('admin/user/'))->with('success_edit', 'User edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();

      return redirect(asset('admin/user/'))->with('delete','User deleted successfully!');
    }
}
