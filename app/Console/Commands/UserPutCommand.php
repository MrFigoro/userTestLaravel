<?php

namespace App\Console\Commands;

class UserPutCommand extends UserCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:put';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update user';

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
	    $userId = $this->ask("Which user ID will be upated?");
	    if ($this->confirm("Are you sure to update user with ID: $userId?")) {
		    $response = $this->client->put("http://usertestlaravel/users/update/$userId", [
			    'form_params' => [
				    "firstName" => "UpdateMyCommand",
				    "secondName" => "UpdateMyCommand",
				    "age" => "555"
			    ]
		    ]);
		    $this->info($response->getStatusCode());
		    $this->comment($response->getBody());
		}
	    else {
		    $this->comment("You refused surgery.");
	    }
    }
}
