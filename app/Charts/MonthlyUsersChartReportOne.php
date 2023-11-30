<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChartReportOne
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): array
    {
        return $this->chart->radialChart()
            ->addData([
                \App\Models\Report::where('manager_id')->count(),

            ])
            ->addLabel(['Vimeo', 'Messenger', 'Facebook', 'LinkedIn'])
            ->toVue();
    }
}
