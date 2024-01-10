<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda ● SistemTA'
        ];
        return view('pages/home', $data);
    }

    public function ta1()
    {
        $data = [
            'title' => 'TA1 ● SistemTA'
        ];
        return view('pages/ta1', $data);
    }

    public function ta2()
    {
        $data = [
            'title' => 'TA2 ● SistemTA'
        ];
        return view('pages/ta2', $data);
    }

    public function dosen()
    {
        $data = [
            'title' => 'Dosen ● SistemTA'
        ];
        return view('pages/dosen', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login ● SistemTA'
        ];
        return view('pages/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar ● SistemTA'
        ];
        return view('pages/register', $data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Jadwal ● SistemTA'
        ];
        return view('pages/jadwal', $data);
    }
}
