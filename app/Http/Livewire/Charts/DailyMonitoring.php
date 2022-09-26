<?php

namespace App\Http\Livewire\Charts;

use Livewire\Component;
use App\Models\KalumpangStreet;
use Illuminate\Support\Facades\DB;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;

class DailyMonitoring extends Component
{

    public function render()
    {
        $today = 0;
        $yesterday = 1;

        $data = DB::table('river_levels')
            ->where('date', '=', now()->subDays($today)->timezone('Asia/Manila')->format('Y-m-d'))
            ->orderBy('created_at','asc')
            ->select('river_level', 'time')
            ->get();

        $daily_area = $data->groupBy('time')
                ->reduce(function ($daily_area, $river) use ($data) {
                $River_Level = $river->first()->river_level;
                $Time = $river->first()->time;
                return $daily_area->addPoint($Time, $River_Level);
            }, LivewireCharts::areaChartModel()
                // ->setTitle('Daily River Level')
                ->setAnimated(true)
                ->setColor('#29ABE2')
                ->setDataLabelsEnabled(true)
                ->withLegend()
                ->setXAxisVisible(true)
            );

        return view('livewire.charts.daily-monitoring')->with([
            'dailyAreaChartModel' => $daily_area,
        ]);
    }
}
