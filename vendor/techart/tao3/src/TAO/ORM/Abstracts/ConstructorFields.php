<?php

namespace TAO\ORM\Abstracts;

use TAO\ORM\Model as AbstractModel;

abstract class ConstructorFields extends AbstractModel
{
	protected $table = 'constructor_fields';

	public function fields()
	{
		$fields = array(
			'fields_list' => array(
				'type' => 'text',
				'label' => 'Список полей',
//				'attrs' => 'v-model="textOption"',
				'in_list' => true,
				'in_form' => true,
			),
			'constructor' => array(
				'type' => 'constructor',
				'label' => 'Конструктор полей',
				'in_list' => false,
				'in_form' => true,
			),
		);
		return $fields;
	}

	public function adminMenuSection()
	{
		return false;
	}

	public function adminTitleList()
	{
		return 'Конструктор полей';
	}

	public function adminTitleEdit()
	{
		return 'Редактирование списка полей';
	}

	public function adminAddButtonText()
	{
		return 'Создать список';
	}
}
