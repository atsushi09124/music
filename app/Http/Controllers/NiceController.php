<?php

namespace App\Http\Controllers;

use App\Models\Nice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    public function niceArtisan(Request $request)
    {
        // ここではfav_flg０がお気に入り数、１はお気に入り解除とする
        $nice = new Nice;
        $nice->post_id = $request->id;
        $nice->user_id = Auth::user()->id;
        $nice->save();

        

    }
}
