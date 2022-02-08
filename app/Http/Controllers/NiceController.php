<?php

namespace App\Http\Controllers;

use App\Models\Nice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    public function niceArtisan(Request $request)
    {
        // niceテーブルのflg取得
        $checkUser = Nice::where('post_id','=',$request->id)->where('user_id','=',Auth::user()->id)->first();
        $nice = new Nice;

        if(empty($checkUser->id))
        {
            // 1がお気に入り数
            $nice->post_id = $request->id;
            $nice->user_id = Auth::user()->id;
            $nice->save();
        }
        elseif($checkUser->flg == 1)
        {
            $checkUser->flg = 0;
            $checkUser->save();
        }
        elseif($checkUser->flg == 0)
        {
            $checkUser->flg = 1;
            $checkUser->save();
        }

        $message = '成功';
        echo json_encode($message);
        exit();
    }
}
