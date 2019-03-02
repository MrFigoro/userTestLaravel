<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DelAllUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:del';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Команда удаляет все записи из таблицы Users';

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
        dd("Команда DelAllUsers должна удалить все записи из таблицы");
        //
    }
}
