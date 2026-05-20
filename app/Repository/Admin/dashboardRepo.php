<?php

namespace App\Repository\Admin;

use App\Models\Driver;
use App\Models\Company;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class dashboardRepo
{
    public function dashboard()
    {

        return view('admin-panel.pages.dashboard');
    }
    

}
