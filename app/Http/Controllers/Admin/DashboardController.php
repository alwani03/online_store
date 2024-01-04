<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\TxTransaction;

class DashboardController extends Controller
{
    public function index()
    {
        $customer       = User::count();
        $revenue        = TxTransaction::sum('grand_total');
        $transactions   = TxTransaction::count();;

        
        return view('pages.admin.dashboard', [
            'customer'      => $customer,
            'revenue'       => $revenue,
            'transactions'  => $transactions
        ]);
    }
}
