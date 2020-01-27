<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->title = 'User';
    }
    
    public function index()
    {
        $title = $this->title = 'User';
        $data = User::all();
        
        return view('admin.'.$title.'.index', compact('data', 'title'));
    }

    public function create()
    {
        $title = $this->title = 'User';
        $data = User::all();
        return view('admin.'.$title.'.tambah', compact('title', 'data'));
    }

    public function store(Request $request)
    {
        $model = $request->all();
        $model['password'] =  bcrypt($model['password']);
        $data = User::create($model);
        if ($data) {
            Alert::toast('Berhasil Menyimpan', 'success');
        } else {
            Alert::toast('Gagal Menyimpan', 'danger');
        }
        return redirect('admin/user');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $title = $this->title = 'User';
        $data = User::find($id);
        
        return view('admin.'.$title.'.edit', compact('data','title'));
    }

    public function update(Request $request, $id)
    {
        $model = $request->all();
        if($model['password']==null){
            $model['password'] =  $model['password_skr'];
        }else{
            $model['password'] =  Hash::make($model['password']);
        }
        $data = User::find($model['id']);
        if ($data->update($model)) {
            Alert::toast('Berhasil Diupdate', 'success');
        } else {
            Alert::toast('Gagal Diupdate', 'danger');
        }
        return redirect('admin/user');
    }
    

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('admin/user');
    }
}
