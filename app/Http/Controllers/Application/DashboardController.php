<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Estimate;
use App\Models\Expense;
use App\Models\Invoice;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display Dashboard Page
     * 
     * @param \Illuminate\Http\Request $request
     *
     */
    public function index(Request $request)
    {
        return "We are good to Go";
    }
}
