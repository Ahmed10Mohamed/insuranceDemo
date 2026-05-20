<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class userOfflineCommand extends Command
{
    protected $signature = 'user-offline-after-one-day';

    protected $description = 'make user offline more than one days have passed since update last_seen';

    public function handle()
    {
        $now = Carbon::now();

        $updateUser = User::whereNotNull('last_activity_date')
            ->whereDate('last_activity_date', '<=', $now->subDays(1))
            ->where('isOnline', 1)
            ->update(['isOnline' => 0,'access_token'=>null,'fcmToken'=>null]);   

        Log::info("update $updateUser users more than 1 days.");
    }
}