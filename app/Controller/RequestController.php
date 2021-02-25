<?php


namespace App\Controller;


use TAO\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
	public function show(Request $request) {
		$value = $request->session()->get('counter', 1);
		echo $value . '<br>';

		// Увеличим счетчик на 1:
		$request->session()->put('counter', $value + 1);

		if (!$request->session()->get('date')) {
			$request->session()->put('date', date('Y-m-d H:i:s'));
		}
		$date = $request->session()->get('date');

		echo 'Дата первого захода: ' . $date . '<br>';

		if (!$request->session()->get('arr')) {
			$request->session()->put('arr', ['a', 'b', 'c']);
		}
		$request->session()->push('arr', 'd');

		debug($request->session()->get('arr'));
		$request->session()->forget('arr'); // удаляет переменную из сессии
		return view('request.show');
	}
}
