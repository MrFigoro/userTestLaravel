<?php

namespace App\Console\Commands;

use App\Console\Commands\UserCommand;

class UsersGetCommand extends UserCommand
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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    	$resp = $this->client->request('GET', 'http://usertestlaravel/users');
	    $this->info($resp->getStatusCode());
	    $this->info($resp->getBody());
//	    $c = collect($resp->getBody());
//
//	    dd($c->count());
    }
}
