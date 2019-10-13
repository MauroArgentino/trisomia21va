<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaptchaController extends Controller
{
	public function create()
	{
		return view('captchacreate');
	}

	public function captchaValidate(Request $request)
	{
		$request->validate([
			'apellido_y_nombres' => 'required',
			'email' => 'required|email',
			'captcha' => 'required|captcha'
		]);
	}

	public function refreshCaptcha()
	{
		return response()->json(['captcha'=> captcha_img()]);
	}
}
