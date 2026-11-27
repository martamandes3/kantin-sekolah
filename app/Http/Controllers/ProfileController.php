<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ProfileController extends Controller
{
    /**
     * Menampilkan halaman utama (Home).
     */
    public function home()
    {
        // Controller mengarahkan request ke view 'home'
        return view('home');
    }
    /**
     * Menampilkan halaman galeri (Gallery).
     */
    public function gallery()
    {
        // Controller mengarahkan request ke view 'gallery'
        return view('gallery');
    }
    /**
     * Menampilkan halaman tentang (About).
     */
    public function about()
    {
        // Controller mengarahkan request ke view 'about'
        return view('about');
    }
}