<?php

namespace Sooand\Dux\Commands;

use Illuminate\Console\Command;

class DuxCommand extends Command
{
    public $signature = 'dux';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
