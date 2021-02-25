<?php


namespace App\Controller;


use TAO\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
	protected $title = 'Test page';

	public function show() {
		return view('test.show', ['title' => $this->title, 'name' => 'John', 'surname' => 'Doe', 'age' => '16']);
	}

	public function sum(int $num1,int $num2) {
		$sum = $num1 + $num2;
		return 'Sum: ' . $sum;
	}

	public function form(Request $request) {
		// Если форма была отправлена...
		if ($request->has('num')) {
			// Получим отправленное число:
			$num = $request->input('num');

			// Если выполняется условие...
			if ($num >= 0 and $num <= 10) {
				// Выполним редирект с данными формы:
				return redirect('test/result')->withInput();
			} else {
				// Условие не выполнено - опять покажем форму:
				return view('test.form');
			}
		} else {
			// Если форма не была отправлена...
			return view('test.form'); // покажем представление с формой
		}
	}

	public function result(Request $request) {
		// После редиректа выведем на экран данные формы:
		return $request->input('num');
	}

	public function method(Request $request) {
		echo 'path() ', $request->path(), '<br>';
		echo 'url() ', $request->url(), '<br>';
		echo 'fullUrl() с get-параметрами ', $request->fullUrl(), '<br>';
		echo 'fullUrlWithQuery([bar => baz]) ', $request->fullUrlWithQuery(['bar' => 'baz']), '<br>';
		echo 'is() ', $request->is('test/method'), '<br>';
		return view('test.method');
	}

	public function show1() {
		return redirect('test/show2');
	}

	public function show2() {
		return 'show2';
	}
}
