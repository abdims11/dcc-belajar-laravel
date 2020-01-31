<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Berita;
use Alert;
use Str;
use Storage;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->title = 'Berita';
    }
    
    public function index(Request $request)
    {
        $title = $this->title = 'Berita';
        $data = Berita::when($request->keyword, function($query) use ($request){
            $query
                ->where('judul', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $data->appends($request->only('keyword'));

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
        $file = isset($model['foto']) ? $model['foto'] : null;
        //dd($files);
        $model['foto'] = uploadFile($file, 'public/gambar', null);
        


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
        $file = isset($model['foto']) ? $model['foto'] : null;
        $model['foto'] = uploadFile($file, 'public/gambar', $model['foto_lama']);
       
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
        if($data->delete()){
            Storage::delete('public/gambar'. '/' . $data->foto);
        }

        return redirect('admin/berita');
    }
}
