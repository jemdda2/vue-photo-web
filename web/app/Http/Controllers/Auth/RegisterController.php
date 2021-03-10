<?php

use Illuminate\Http\Request; // ★ 追加

class RegisterController extends Controller
{
    /* 中略 */

    // ★ メソッド追加
    protected function registered(Request $request, $user)
    {
        return $user;
    }
}