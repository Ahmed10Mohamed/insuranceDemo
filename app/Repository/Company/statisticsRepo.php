<?php

namespace App\Repository\Vendor;

use App\Models\Order;
use App\Models\TruckSize;
use Illuminate\Support\Facades\DB;
use App\Models\TruckType;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;
class statisticsRepo
{

    public function exportOrder($request)
    {
        $fileName = 'orders-' . now()->format('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new OrdersExport($request), $fileName);
        
    }
    public function index($request)
    {
        $truckTypes = TruckType::orderBy('id','DESC')->get();
        $companyId = admin()->company?->id;
        $filter = $request->filter;
        [$from, $to] = match ($filter) {
            'weekly'  => [now()->subWeek()->startOfDay(), now()->endOfDay()],
            'monthly' => [now()->subMonth()->startOfDay(), now()->endOfDay()],
            'yearly'  => [now()->subYear()->startOfDay(), now()->endOfDay()],
            default   => [now()->subDay()->startOfDay(), now()->endOfDay()],
        };
      
        $all_data = Order::query()
            ->where('company_id', $companyId)
            ->with([
                'company.user',
                'driver.user',
                'truckType',
                'truckSize',
                'orderStatus',
                'orderTrack',
                'companyDataTo.user'
                ])
            ->when($request->filter, fn ($q) => $q->whereBetween('created_at', [$from, $to]))
            ->when($request->truck_type_id, fn ($q) => $q->where('truck_type_id', $request->truck_type_id))
            ->when($request->truck_size_id, fn ($q) => $q->where('truck_size_id', $request->truck_size_id))
            ->when($request->companyTo, fn ($q) => $q->where('companyTo', $request->companyTo))
            ->orderByDesc('id')
            ->paginate(20);

        // Aggregated Data for Charts (Based on same filters)
        $chartQuery = Order::query()
            ->where('company_id', $companyId)
            ->when($request->filter, fn ($q) => $q->whereBetween('created_at', [$from, $to]))
            ->when($request->truck_type_id, fn ($q) => $q->where('truck_type_id', $request->truck_type_id))
            ->when($request->truck_size_id, fn ($q) => $q->where('truck_size_id', $request->truck_size_id));

        $orderTrends = (clone $chartQuery)
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $truckTypeUsage = (clone $chartQuery)
            ->groupBy('truck_type_id')
            ->select('truck_type_id', DB::raw('count(*) as count'))
            ->with('truckType')
            ->get()
            ->map(fn($item) => ['label' => optional($item->truckType)->name ?? 'غير محدد', 'value' => $item->count]);

        $statusUsage = (clone $chartQuery)
            ->groupBy('order_statuses_id')
            ->select('order_statuses_id', DB::raw('count(*) as count'))
            ->with('orderStatus')
            ->get()
            ->map(fn($item) => ['label' => optional($item->orderStatus)->name ?? 'غير محدد', 'value' => $item->count]);

        return view('vendor-panel.pages.statistics.index', compact(
            'all_data', 
            'truckTypes', 
            'orderTrends', 
            'truckTypeUsage', 
            'statusUsage'
        ));
    }



}
