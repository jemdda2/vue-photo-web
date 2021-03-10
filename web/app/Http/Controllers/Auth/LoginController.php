<?php

use Illuminate\Http\Request; // ★ 追加

class LoginController extends Controller
{
    /* 中略 */

    // ★ メソッド追加
    protected function authenticated(Request $request, $user)
    {
			return $user;
    }

		protected function loggedOut(Request $request)
		{
			// セッションを再生成する
			$request->session()->regenerate();

			return response()->json();
		}
}