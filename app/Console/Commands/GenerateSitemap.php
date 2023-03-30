<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{

    const SITEMAP = 'sitemap.xml';

    const DOMAIN_SITEMAP = 'https://globalhack.org/';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $sitemap = SitemapGenerator::create(self::DOMAIN_SITEMAP)->getSitemap();
        $sitemapTags = $sitemap->getTags();
        $newSitemap = Sitemap::create();
        foreach ($sitemapTags as $tag)
        {
            if ($tag->url === 'https://globalhack.org/') {
                $tag->setPriority(1.0);
                $newSitemap->add($tag);
                continue;
            }
            $tag->setPriority(0.7);
            $newSitemap->add($tag);
        }
        $newSitemap->writeToFile(self::SITEMAP);
    }
}
