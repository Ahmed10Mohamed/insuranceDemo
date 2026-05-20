<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Company\dashboardRepo;

class DashboardController extends Controller
{
    protected dashboardRepo $dashboardRepo;
    function __construct(dashboardRepo $dashboardRepo){
        $this->dashboardRepo = $dashboardRepo;
    }
    public function __invoke(){
        return $this->dashboardRepo->dashboard();

    }

}
