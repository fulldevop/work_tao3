<?php

namespace App\Controller;

use TAO\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
	public function form(Request $request, $title = '', $type = '')
	{
		debug($request->session()->get('key'));
		if ($request->isMethod('get')) {
			return view('form.form', ['title' => $title, 'type' => $type]);
		}

		if ($request->isMethod('post')) {
			$fields = $request->only('login');
			$fields['name'] = $request->input('user.name');
			$fields['surname'] = $request->input('user.surname');
			return view('form.form', ['fields' => $fields, 'title' => $title, 'type' => $type]);
		}
	}

	public function result(Request $request)
	{
		return view('form.result', ['text' => $request->text, 'method' => $request->method()]);
	}
}
