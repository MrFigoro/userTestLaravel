<?php

namespace App\Console\Commands;


use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use Illuminate\Console\Command;


class MyFirstParserCommand extends UserCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parser:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My first parser';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	    $site = $this->client->request('GET', 'https://natatnik.by/events/');
	    $contents = $site->getBody()->getContents();
	    $crawler = new Crawler($contents);
//	    dd($crawler);
	    $html = $crawler->filter('html');
	    dd($html);
//	    $this->info($site->getStatusCode());
//	    $this->info($site->getBody());
//	    $contents = (string) $site->getBody();
//	    dd($contents);


//	    $html = $crawler->html();


//	    $crawler = new Crawler($site->getBody());
//	    $title = $crawler->filter('html > title');
//	    dd($title);
//	    $p = $html->filter('body > p')->first();
//		dd($p);
//	    foreach ($crawler as $domElement) {
//		    dd($domElement->nodeName);
//	    }
    }
}
