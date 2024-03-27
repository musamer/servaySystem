<?php

namespace Model;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * Person class
 */
class Person
{

	use Model;

	protected $table = 'person';
	protected $primaryKey = 'person_id';

	public function saveLogs($data)
	{
		/** save logs function */
	}
	public function showLogs($data)
	{
		/** show logs function */
	}
}
