<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all()->sortByDesc("created_at");

        return view('dashboard.report.index', ['reports' => $reports]);
    }
}
