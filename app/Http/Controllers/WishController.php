<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function store(Request $request) {
    $data = Wish::create([
        'nama' => $request->nama,
        'wish' => $request->wish,
    ]);
    return redirect()->to('/#wish');
    }
}
