<?php


namespace App\Controller;


use TAO\Controller;

class EmployeeController extends Controller
{
	private $employees;

	public function __construct()
	{
		$this->employees = [
			1 => [
				'name' => 'user1',
				'surname' => 'surname1',
				'salary' => 1000,
			],
			2 => [
				'name' => 'user2',
				'surname' => 'surname2',
				'salary' => 2000,
			],
			3 => [
				'name' => 'user3',
				'surname' => 'surname3',
				'salary' => 3000,
			],
			4 => [
				'name' => 'user4',
				'surname' => 'surname4',
				'salary' => 4000,
			],
			5 => [
				'name' => 'user5',
				'surname' => 'surname5',
				'salary' => 5000,
			],
		];
	}

	public function showOne(int $id)
	{
		if (array_key_exists($id, $this->employees)) {
			$employee = $this->employees[$id];
			$message = "Работник {$employee['name']} {$employee['surname']} <br>имеет зарплату в размере {$employee['salary']} рублей.";
		} else {
			$message = 'Работник не найден.';
		}

		return $message;
	}

	public function showField(int $id, string $field)
	{
		$message = 'Не найдена информация о работнике.';

		if (array_key_exists($id, $this->employees) && array_key_exists($field, $this->employees[$id])) {
			$employee = $this->employees[$id];
			$message = "Искомое значение - {$employee[$field]}";
		}

		return $message;
	}
}
