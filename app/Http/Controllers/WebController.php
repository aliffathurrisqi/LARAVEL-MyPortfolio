<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web;

class WebController extends Controller
{
    public function index()
    {
        return view(
            'webportfolio',
            [
                "title" => "Portfolio",
                "webs" => Web::all()
            ]
        );
    }

    public function show(Web $web)
    {
        //         Web::create([
        //         'nama' => "Beautyfinder",
        //         'slug' => "beautyfinder"
        //         'keterangan' => "Webview Aplikasi Pencarian Toko",
        //         'build' => "HTML, PHP, Javascript, Google Maps Api, Bootstrap, Kotlin, MySql",
        //         'id_job' => 1]
        // );
        return view(
            'webdetail',
            [
                "title" => $web->nama,
                "web" => $web
            ]
        );
    }
}

// Web::create(
//     [
//         'nama' => "Beautyfinder",
//         'slug' => "beautyfinder",
//         'keterangan' => "Webview Aplikasi Pencarian Toko",
//         'build' => "HTML, PHP, Javascript, Google Maps Api, Bootstrap, Kotlin, MySql",
//         'id_job' => 1
//     ]
// );
