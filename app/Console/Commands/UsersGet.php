<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

class UsersGet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make Get request for all users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://usertestlaravel/users');
        echo "Status code: ".$response->getStatusCode()."\n";
        echo "Response body: ".$response->getBody()."\n";
        echo 'Command "users:get" successful';
    }
}
