<?php

namespace Model;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * Logs class
 */
class Booking
{
	use Model;

	protected $table = 'booking';
	protected $primaryKey = 'id';



	protected $onInsertValidationRules = [

		'email' => [
			'email',
			'unique',
			'required',
		],
		'username' => [
			'alpha',
			'required',
		],
		'password' => [
			'not_less_than_8_chars',
			'required',
		],
	];

	protected $onUpdateValidationRules = [

		'email' => [
			'email',
			'unique',
			'required',
		],
		'username' => [
			'alpha',
			'required',
		],
		'password' => [
			'not_less_than_8_chars',
			'required',
		],
	];


	}


