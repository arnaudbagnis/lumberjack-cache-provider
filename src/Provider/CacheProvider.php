<?php

namespace App\Providers;

use Rareloop\Lumberjack\Providers\ServiceProvider;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class CacheProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cache', new FilesystemAdapter);
    }

}
