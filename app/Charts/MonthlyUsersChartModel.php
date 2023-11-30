<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChartModel
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): array
    {
        return $this->chart->pieChart()
            ->setTitle('Monthly Users')
            ->setSubtitle('Active Users vs Inactive users')
            ->addData([
                \App\Models\User::where('id', '<=', 10)->count(),
                \App\Models\User::where('id', '>', 10)->count()
            ])
            ->setLabels(['Active users', 'Inactive users'])
            ->toVue();
    }
}
