<?php

namespace App\Console\Commands;

class UserPostCommand extends UserCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new user';

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
	    $response = $this->client->request('POST', 'http://usertestlaravel/users/store', [
		    'form_params' => [
			    "firstName" => "TestStoreMyCommand",
			    "secondName" => "TestStoreMyCommand",
			    "age" => "12"
		    ]
	    ]);
	    $this->info($response->getStatusCode());
	    $this->comment($response->getBody());
    }
}
