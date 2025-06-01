<?php

namespace NiclasTimm\Feedbeggar\Commands;

use Illuminate\Console\Command;

class FeedbeggarCommand extends Command
{
    public $signature = 'laravel-feedbeggar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
