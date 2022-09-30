<?php

namespace App\Http\Livewire\Charts;

use Livewire\Component;
use App\Models\KalumpangStreet;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel ;

class PriorityStreetChart extends Component
{
    public function render()
    {
        // Kalumpang Street Priority
        $data = DB::table('kalumpang_streets')
            ->orderBy('Priority','asc')
            ->select('Street_name', 'Priority')
            ->get();

        $priority_pie = $data->groupBy('Priority')
            ->reduce(function ($priority_pie, $priority_level) {
                $Priority_item = $priority_level->first()->Priority;
                $Priority_Name = 'Priority level: ' . $Priority_item;
                $Priority = $priority_level->count('Priority');

            return $priority_pie->addSlice($Priority_Name, $Priority, '#90cdf4');

        }, LivewireCharts::pieChartModel()
            // ->setTitle('Kalumpang Street Priority')
            ->setAnimated(true)
            ->setType('pie')
            ->withLegend()
            ->legendPositionBottom()
            ->legendHorizontallyAlignedCenter()
            ->setDataLabelsEnabled(true)
            ->setColors(["#e60049", "#0bb4ff", "#50e991", "#e6d800", "#9b19f5", "#ffa300", "#dc0ab4", "#b3d4ff", "#00bfa0"])
        );


        // Number of residents per street
        $data_2 = DB::table('users')->where('isVerified','=', true)->orderBy('created_at','asc')->select('address')->get();

        $resident_street_pie = $data_2->groupBy('address')
            ->reduce(function ($resident_street_pie, $resident_per_street) {
                $StreetName = $resident_per_street->first()->address;
                $NumberOfResidents = $resident_per_street->count('address');

            return $resident_street_pie->addSlice($StreetName, $NumberOfResidents, '#90cdf4');

        }, LivewireCharts::pieChartModel()
            // ->setTitle('Residents Per Street')
            ->setAnimated(true)
            ->setType('pie')
            ->withLegend()
            ->legendPositionBottom()
            ->legendHorizontallyAlignedCenter()
            ->setDataLabelsEnabled(true)
            ->setColors(["#e60049", "#0bb4ff", "#50e991", "#e6d800", "#9b19f5", "#ffa300", "#dc0ab4", "#b3d4ff", "#00bfa0"])
        );

        // For registered as
        $data_3 = DB::table('users')->where('isVerified','=',true)->orderby('created_at','asc')->select('registerMeAs')->get();

        $registeredAs_column = $data_3->groupBy('registerMeAs')
            ->reduce(function ($registeredAs_column, $MeAs) {
                $Me = $MeAs->first()->registerMeAs;
                $Count = $MeAs->count('registerMeAs');
                return $registeredAs_column->addColumn($Me, $Count, '#90cdf4');

            }, LivewireCharts::columnChartModel()
                // ->setTitle('Registered Identified As')
                ->setAnimated(true)
                ->setDataLabelsEnabled(true)
                ->withLegend()
                ->setColors(["#e60049", "#0bb4ff", "#50e991", "#e6d800", "#9b19f5", "#ffa300", "#dc0ab4", "#b3d4ff", "#00bfa0"])
            );


        return view('livewire.charts.priority-street-chart')->with([
            'PriorityStreetChartModel' => $priority_pie,
            'ResidentsPerStreetChartModel' => $resident_street_pie,
            'RegisteredAsChartModel' => $registeredAs_column,
        ]);
    }
}
