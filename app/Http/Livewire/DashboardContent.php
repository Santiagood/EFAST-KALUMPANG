<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DashboardInfograph;
use Livewire\WithPagination;

class DashboardContent extends Component
{

    use WithPagination;

    public $search;

    public function read($search) {
        if(empty($search)) {
            return DashboardInfograph::orderBy('infograph_order', 'asc')->paginate(6);
        }
        else {
            return DashboardInfograph::where('infograph_title', 'LIKE', '%' . $search . '%')->orWhere('infograph_order', '=', $search)->orWhere('infograph_message', 'LIKE', '%' . $search . '%')->orderBy('infograph_order', 'asc')->paginate(6);
        }
    }

    public function render()
    {
        return view('livewire.dashboard-content', [
            'showAllInfographs' => $this->read($this->search),
        ]);
    }
}
