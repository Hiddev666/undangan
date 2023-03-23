<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;

class PagesController extends Controller
{
    public function index(Request $request) {
        $data = Wish::all();
        return view('home', [
            'to' => $request->to,
            'wish' => $data
        ]);
    }

    public function pengundang() {
        return view('pengundang');
    }

    public function sendundangan() {
        return view('sendundangan');
    }

    public function generate(Request $request) {
        $name = $request->name;
        $nama = Session::flash('name', str_replace(' ', '-', $name));
        $data = Session::flash('generated', "https://undolkita.000webhostapp.com/?to=" . str_replace(' ', '-', $name));
    return redirect()->to('/sendundangan');

        // return redirect('/sendundangan', 302, ['test' => ]);
    }
}
