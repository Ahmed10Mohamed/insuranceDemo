<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class CheckDriversDelayCommand extends Command
{
    protected $signature = 'orders:check-drivers-delay';

    protected $description = 'driver delay more than 30 minute not send your location';

   public function handle()
    {
        dispatch(new \App\Jobs\CheckDriversDelayJob);
    }

}