<?php

Event::listen('orchestra.started: admin', function () {
    $acme = Orchestra\Resources::make('acme', array(
        'name'    => 'Acme',
        'uses'    => 'restful:Lightbulb\Acme\Routing\AcmeController',
        'visible' => Auth::check(),
    ));
});
