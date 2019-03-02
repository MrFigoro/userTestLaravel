<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OutputText extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:output';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Эту команду создал я - просто вывод текста';

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
        dd("Вывод текста команды Output");//
    }
}
