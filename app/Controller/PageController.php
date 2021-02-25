<?php


namespace App\Controller;


use TAO\Controller;

class PageController extends Controller
{
	public function showOne(int $id) {
		$pages = [
			1 => 'страница 1',
			2 => 'страница 2',
			3 => 'страница 3',
			4 => 'страница 4',
			5 => 'страница 5',
		];

		if (!key_exists($id, $pages)) {
			$message = 'Такой страницы не существует.';
		} else {
			$message = $pages[$id];
		}

		return $message;
	}
	public function showAll() {
		return 'PageController@showAll';
	}
}
