<?php

namespace App\Http\Livewire\Charts;

use Livewire\Component;
use App\Models\RiverLevel;
use Illuminate\Support\Facades\DB;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;

class YearlyMonitoring extends Component
{
    public function render()
    {
        $data = DB::table('river_levels')->orderby('created_at','asc')->select('year', 'river_level')->get();

        $yearly_column = $data->groupBy('year')
            ->reduce(function ($yearly_column, $riverLevel) {
                $Year = $riverLevel->first()->year;
                $Average = $riverLevel->average('river_level');
                $AverageLevel = round($Average, 2);

                return $yearly_column->addColumn($Year, $AverageLevel, '#90cdf4');

            }, LivewireCharts::columnChartModel()
                ->setTitle('Yearly River Level')
                ->setAnimated(true)
                ->setDataLabelsEnabled(true)
                ->withLegend()
                ->setColors(["#e60049", "#0bb4ff", "#50e991", "#e6d800", "#9b19f5", "#ffa300", "#dc0ab4", "#b3d4ff", "#00bfa0"])
            );

        return view('livewire.charts.yearly-monitoring')->with([
            'yearlyColumnChartModel' => $yearly_column,
        ]);
    }
}
