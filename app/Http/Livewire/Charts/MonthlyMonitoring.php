<?php

namespace App\Http\Livewire\Charts;

use Livewire\Component;
use App\Models\RiverLevel;
use Illuminate\Support\Facades\DB;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;

class MonthlyMonitoring extends Component
{
    public $year;

    protected $listeners = ['refreshMonthlyChart' => 'render'];

    public function yearChange() {
        $this->emitUp('refreshMonthlyChart');
    }

    public function render()
    {
        // $data = DB::table('river_levels')->where('year','=',now()->year)->orderby('created_at','asc')->select('month', 'river_level')->get();
        $data = DB::table('river_levels')->where('year','=', $this->year)->orderby('created_at','asc')->select('month', 'river_level')->get();

        $monthly_column = $data->groupBy('month')
            ->reduce(function ($monthly_column, $riverLevel) {
                $Month = $riverLevel->first()->month;
                $Average = $riverLevel->average('river_level');
                $AverageLevel = round($Average, 2);
                return $monthly_column->addColumn($Month, $AverageLevel, '#90cdf4');

            }, LivewireCharts::columnChartModel()
                // ->setTitle('Monthly River Level')
                ->setAnimated(true)
                ->setDataLabelsEnabled(true)
                ->withLegend()
                ->setColors(["#e60049", "#0bb4ff", "#50e991", "#e6d800", "#9b19f5", "#ffa300", "#dc0ab4", "#b3d4ff", "#00bfa0"])
            );

        return view('livewire.charts.monthly-monitoring')->with([
            'monthlyColumnChartModel' => $monthly_column,
        ]);
    }
}
