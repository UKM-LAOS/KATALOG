<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Toko;

class AdminController extends Controller
{
    function index()
    {
        $monthlyProductData = Produk::selectRaw('EXTRACT(MONTH FROM created_at) as month, COUNT(*) as count')
        ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $monthlyProductCounts = array_fill(1, 12, 0);
        foreach ($monthlyProductData as $month => $count) {
            $monthlyProductCounts[$month] = $count;
        }
        $monthlyProductData = array_values($monthlyProductCounts);

        $monthlyStoreData = Toko::selectRaw('EXTRACT(MONTH FROM created_at) as month, COUNT(*) as count')
        ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $monthlyStoreCounts = array_fill(1, 12, 0);
        foreach ($monthlyStoreData as $month => $count) {
            $monthlyStoreCounts[$month] = $count;
        }
        $monthlyStoreData = array_values($monthlyStoreCounts);
        return view(
            'admin',
            [
                'monthlyProductData' => $monthlyProductData,
                'monthlyStoreData' => $monthlyStoreData,
            ]
        );
    }

    public function adminProduct()
    {
        return view('adminProduct');
    }

    public function adminToko()
    {
        return view('adminToko');
    }
}
