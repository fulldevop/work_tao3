<?php

namespace App\Controller;

use TAO\Controller;

class Gallery extends Controller
{
	public function all()
	{
		$elems = \TAO::datatype('photos')->get();
		$items = [];
		foreach ($elems as $elem) {
			$modsImg = 'fit400x400';
			$pathNew = app('tao.images')->modify($elem->photo, $modsImg);
			$items[] = [
				'title' => $elem->title,
				'img' => $elem->photo ? \Storage::url($pathNew) : '',
				'img_big' => $elem->photo ? \Storage::url($elem->photo) : '',
			];
		}

		return view('gallery.list', compact('items'));
	}
}
