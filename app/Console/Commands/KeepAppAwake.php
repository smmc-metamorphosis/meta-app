<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:keep-app-awake')]
#[Description('Command description')]
class KeepAppAwake extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
    // It pings itself to stay alive
    $url = 'https://smmcmetamorphosis.webredirect.org';
    file_get_contents($url);
    $this->info('Pinged ' . $url . ' at ' . now());
    }
}
