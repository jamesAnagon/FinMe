<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $accounts = auth() -> user()
            ->accounts()
            ->where('is_active', true)
            ->get();

        return view('dashboard.index', compact('accounts'));
    }
}
