<?php

namespace Filament\Commands\Aliases;

use Filament\Commands;

class UpgradeCommand extends Commands\UpgradeCommand
{
    protected $hidden = true;

    protected $signature = 'filament:upgrade';
}
