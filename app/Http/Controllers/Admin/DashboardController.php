<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Admin\dashboardRepo;

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
