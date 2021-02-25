<?php

namespace App\Model;

class MainSlides extends \TAO\ORM\Model
{
	public $table = 'main_slides';
	public $typeTitle = 'Слайды на главной';
	use \TAO\ORM\Traits\SchemaHelper;

	public function ordered()
	{
		return $this->orderBy('weight', 'asc')->orderBy('id', 'asc');
	}
}

/*schema

title:string(200) "Заголовок" 100%
image:image "Картинка"
video:upload "Видео"
bgcolor:string(10) "Цвет фона" 100px
color:string(10) "Цвет текста" 100px
content:text "Текст" 100% 200h
files:attaches "Прикрепленные файлы"
weight:integer "Вес"

*image
*title
*weight

schema*/
