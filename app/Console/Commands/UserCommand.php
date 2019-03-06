<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 06.03.2019
 * Time: 23:27
 */

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

abstract class UserCommand extends Command
{
	public $client;

	public function __construct()
	{
		parent::__construct();
		$this->client = new Client();
	}
}