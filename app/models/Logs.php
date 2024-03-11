<?php

namespace Model;

defined('ROOTPATH') or exit('Access Denied!');

/**
 * Logs class
 */
class Logs
{

	use Model;

	protected $table = 'logs';
	protected $primaryKey = 'id';

	public function saveLogs($data)
	{
		/** save logs function */
	}
	public function showLogs($data)
	{
		/** show logs function */
	}
}
