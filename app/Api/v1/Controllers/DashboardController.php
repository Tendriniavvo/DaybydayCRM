<?php
namespace App\Api\v1\Controllers;
use App\Models\Client;
use App\Models\Task;
use App\Models\Offer;
use App\Models\Invoice;
use App\Models\Payment;
use App\Api\v1\Controllers\ApiController;

class DashboardController extends ApiController{
    public function getData(){
        $totals = [
            'clients'  => Client::count(),
            'tasks'    => Task::count(),
            'offers'   => Offer::count(),
            'invoices' => Invoice::count(),
            'payments' => Payment::count(),
            'total_revenue' => Payment::sum('amount') / 100 // Conversion en devise réelle
        ];

        return response()->json([
            'status' => 'success',
            'data'   => $totals
        ]);

    }
}