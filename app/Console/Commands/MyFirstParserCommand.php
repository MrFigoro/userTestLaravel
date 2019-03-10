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

	    $event = $crawler->filterXPath('//div[@class="tribe-events-photo-event-wrap"]')->
	    each(function ($element){
			$img = $element->filterXPath('//img[@class="attachment-medium size-medium wp-post-image"]')->attr('src');
			$title = trim($element->filterXPath('//a[@class="tribe-event-url"]')->text());
			$date = $element->filterXPath('//span[@class="tribe-event-date-start"]')->text();
			if ($element->filterXPath('//span[@class="tribe-event-date-end"]')->count() > 0) {
			    $date = $date." - ".$element->filterXPath('//span[@class="tribe-event-date-end"]')->text();
		    }
		    if ($element->filterXPath('//span[@class="tribe-event-time"]')->count() > 0) {
			    $date = $date." - ".$element->filterXPath('//span[@class="tribe-event-time"]')->text();
		    }
			if ($element->filterXPath('//span[@class="tribe-events-event-cost"]')->count() == 0) {
				$cost = "Информации о стоимости нет";
			} else {
				$cost = $element->filterXPath('//span[@class="tribe-events-event-cost"]')->text();
			};
			return [$img, $title, $date, $cost];
	    });
	    dd($event);
    }
}
