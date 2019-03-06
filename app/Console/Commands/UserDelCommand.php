<?php

namespace App\Console\Commands;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class UserDelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    protected $signature = 'user:del {id}';
	protected $signature = 'user:del';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete user with given ID';

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
	    $userId = $this->ask("Which user ID will be deleted?");
	    $myUser = User::find($userId);
	    if ($myUser instanceof User) {
		    $client = new Client();
		    if ($this->confirm("Are you sure to delete user with ID: $userId?")) {
			    $resp = $client->delete("http://usertestlaravel/users/destroy/$userId");
			    $this->info($resp->getStatusCode());
			    $this->comment($resp->getBody());
		    } else {
			    $this->comment("You refused surgery.");
		    }
	    }
	    else {
		   $this->error('Something went wrong!');
	    }
    }
}
