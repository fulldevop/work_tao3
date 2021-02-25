<?php

namespace App\Model;

use TAO\ORM\Model;

class Photo extends Model
{
	public $table = 'photos';
	public $typeTitle = 'Gallery';

	public function fields()
	{
		return array(
			'title' => array(
				'type' => 'string',
				'label' => 'Название',
				'in_form' => true,
				'in_list' => true,
				'style' => 'width: 30%',
			),
			'photo' => array(
				'type' => 'image',
				'label' => 'Фото',
				'in_form' => true,
				'in_list' => true,
			),
		);
	}
}
