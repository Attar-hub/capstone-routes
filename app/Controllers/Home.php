<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home Page'];
        return view('v_home', $data);
    }

    public function about()
    {
        $data = ['title' => 'About Page'];
        return view('v_about', $data);
    }

    public function produk()
    {
        $data = ['title' => 'Daftar Produk'];
        return view('v_produk', $data);
    }

    public function keranjang()
    {
        $data = ['title' => 'Keranjang Belanja'];
        return view('v_keranjang', $data);
    }
}