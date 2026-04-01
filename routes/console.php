<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Vérifie la file d'attente chaque minute
// --stop-when-empty : le worker s'arrête de lui-même si la file est vide
// withoutOverlapping : empêche d'avoir plusieurs workers en même temps
Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping();
