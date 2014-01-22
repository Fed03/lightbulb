<?php namespace Lightbulb\Acme;

use Illuminate\Support\ServiceProvider;

class AcmeServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $path = realpath(__DIR__);

        $this->package('lightbulb/acme', 'lightbulb/acme', $path);

        require "{$path}/routes.php";
    }
}
