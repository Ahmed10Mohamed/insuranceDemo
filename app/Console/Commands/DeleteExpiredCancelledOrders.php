<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DeleteExpiredCancelledOrders extends Command
{
    protected $signature = 'orders:delete-cancelled-after-2days';

    protected $description = 'Delete orders that were cancelled and more than 2 days have passed since cancelOrderDate';

    public function handle()
    {
        $now = Carbon::now();

        $deletedOrders = Order::whereNotNull('cancelOrderDate')
            ->whereDate('cancelOrderDate', '<=', $now->subDays(2))
            ->where('order_statuses_id', 14)
            ->delete();

        Log::info("Deleted $deletedOrders cancelled orders older than 2 days.");
    }
}
