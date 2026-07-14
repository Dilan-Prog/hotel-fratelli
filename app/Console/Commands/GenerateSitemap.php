<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     */
    protected $description = 'Genera public/sitemap.xml con las URLs fijas del sitio';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $now = Carbon::now();
        $baseUrl = 'https://www.hotelfratelli.com.mx';

        $urls = [
            ['path' => '/hoteles-en-aguascalientes', 'priority' => 1.0, 'changefreq' => Url::CHANGE_FREQUENCY_WEEKLY],
            ['path' => '/habitaciones/sencilla', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/habitaciones/doble', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/habitaciones/doble-matrimonial', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/habitaciones/suite-jr', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/habitaciones/master-suite', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/habitaciones/triple', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/habitaciones/cuadruple', 'priority' => 0.9, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/hoteles-economicos-aguascalientes', 'priority' => 0.8, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/hoteles-cerca-feria-san-marcos', 'priority' => 0.8, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/hoteles-centro', 'priority' => 0.8, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/contacto', 'priority' => 0.6, 'changefreq' => Url::CHANGE_FREQUENCY_YEARLY],
            ['path' => '/galeria', 'priority' => 0.5, 'changefreq' => Url::CHANGE_FREQUENCY_MONTHLY],
        ];

        $sitemap = Sitemap::create();

        foreach ($urls as $entry) {
            $sitemap->add(
                Url::create($baseUrl.$entry['path'])
                    ->setLastModificationDate($now)
                    ->setPriority($entry['priority'])
                    ->setChangeFrequency($entry['changefreq'])
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generado en public/sitemap.xml');

        return self::SUCCESS;
    }
}
