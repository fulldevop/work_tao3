<?php

namespace TAO\ORM\Model;

use TAO\ORM\Abstracts\ConstructorFields as AbstractConstructorFields;

class ConstructorFields extends AbstractConstructorFields
{
	public function findByCode($code)
	{
		foreach ($this->where('code', $code)->get() as $item) {
			return $item;
		}
	}

	public function title()
	{
		return $this['title'];
	}
}


