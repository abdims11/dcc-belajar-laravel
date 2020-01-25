<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categori;
use Alert;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->title = 'Kategori';
    }
    
    public function index()
    {
        $title = $this->title = 'Kategori';
        $data = Categori::all();
        
        return view('admin.'.$title.'.index', compact('data', 'title'));
    }

    public function create()
    {
        $title = $this->title = 'Kategori';

        return view('admin.'.$title.'.tambah', compact('title'));
    }

    public function store(Request $request)
    {
        $model = $request->all();
        $model['user_id'] = auth()->user()->id; 

        

        if ($data = Categori::create($model)) {
            Alert::toast('Kategori Berhasil Ditambahkan', 'success');
        } else {
            Alert::toast('Kategori Gagal Ditambahkan', 'danger');
        }

        return redirect('admin/kategori');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $title = $this->title = 'Kategori';
        $data = Categori::find($id);
        
        return view('admin.'.$title.'.edit', compact('data','title'));
    }

    public function update(Request $request, $id)
    {
        $model = $request->all();
        $model['user_id'] = auth()->user()->id; 
        $data = Categori::find($model['id']);
        

        if ($data->update($model)) {
            Alert::toast('Kategori Berhasil Diupdate', 'success');
        } else {
            Alert::toast('Kategori Gagal Diupdate', 'danger');
        }

        return redirect('admin/kategori');
    }
    

    public function destroy($id)
    {
        $data = Categori::find($id);
        $data->delete();
        return redirect('admin/kategori');
    }
}
