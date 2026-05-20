<?php

namespace App\Repository\Company;

use App\Models\Company;
use Illuminate\Support\Facades\DB;

class dashboardRepo
{
    public function dashboard()
    {
        
    

        return view('Company-panel.pages.dashboard',);
    }
    

}
