<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Berita;
use Alert;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->title = 'Berita';
    }
    
    public function index()
    {
        $title = $this->title = 'Berita';
        $data = Berita::all();
        
        return view('admin.'.$title.'.index', compact('data', 'title'));
    }

    public function create()
    {
        $title = $this->title = 'Berita';

        return view('admin.'.$title.'.tambah', compact('title'));
    }

    public function store(Request $request)
    {
        $model = $request->all();
        $model['user_id'] = auth()->user()->id; 

        if ($data = Berita::create($model)) {
            Alert::toast('Berita Berhasil Ditambahkan', 'success');
        } else {
            Alert::toast('Berita Gagal Ditambahkan', 'danger');
        }

        return redirect('admin/berita');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $title = $this->title = 'Berita';
        $data = Berita::find($id);
        
        return view('admin.'.$title.'.edit', compact('data','title'));
    }

    public function update(Request $request, $id)
    {
        $model = $request->all();
        $model['user_id'] = auth()->user()->id; 
        $data = Berita::find($model['id']);

        if ($data->update($model)) {
            Alert::toast('Berita Berhasil Diupdate', 'success');
        } else {
            Alert::toast('Berita Gagal Diupdate', 'danger');
        }

        return redirect('admin/berita');
    }
    

    public function destroy($id)
    {
        $data = Berita::find($id);
        $data->delete();
        return redirect('admin/berita');
    }
}
