<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Berita;
use App\User;
use Alert;


class DashboardController extends Controller
{
    public function index()
    {
    	$data = Berita::all()->count();
    	$user = User::all()->count();
    	return view('admin.dashboard', compact('data','user'));
    }

    public function user()
    {
    	return view('admin.user');
    }
}
