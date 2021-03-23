<?php

namespace Filament\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UpgradeCommand extends Command
{
    use Concerns\CanManipulateFiles;

    protected $description = 'Upgrade Filament to the latest version.';

    protected $signature = 'make:filament-upgrade';

    public function handle()
    {
        system('composer update');

        foreach ([
                     'migrate',
                     'livewire:discover',
                     'route:clear',
                     'view:clear',
                 ] as $command) {
            $this->call($command);
        }

        $this->info('Successfully upgraded!');
    }
}
