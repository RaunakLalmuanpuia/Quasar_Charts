<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Charts\MonthlyUsersChart;
use App\Charts\MonthlyUsersChartModel;
use App\Charts\MonthlyUsersChartReport;
use App\Charts\MonthlyUsersChartReportOne;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MonthlyUsersChart $chart, MonthlyUsersChartModel $model, MonthlyUsersChartReport $report, MonthlyUsersChartReportOne $one)
    {
        return Inertia::render('Chart/Index', [
            'chart' => $chart->build(),
            'model' => $model->build(),
            'report' => $report->build(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
