<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
    	'id',
        'judul',
        'kategori_id',
        'deskripsi', 
        'isi',
        'foto',
        'user_id'
    ];

    public function user()
    {
        return $this->hasone('App\User', 'id' , 'user_id');
    }
    public function kategori()
    {
        return $this->hasone('App\Model\Categori', 'id' , 'kategori_id');
    }

}

