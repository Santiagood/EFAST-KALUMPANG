<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DashboardInfograph;
use Livewire\WithPagination;

class DashboardContent extends Component
{

    protected $listeners = ['refreshTheInfograph' => 'render'];

    use WithPagination;

    public $search;
    public $infograph_title;
    public $infograph_image;
    public $infograph_order;
    public $infograph_message;
    public $infograph_Target_ID;

    public $modalViewInfographVisible = false;

    public function mount() {
        $this->resetPage();
    }

    public function viewShowModal($id) {
        $this->resetVariables();
        $this->infograph_Target_ID = $id;
        $this->modalViewInfographVisible = true;
        $this->loadModel();
    }

    public function resetVariables() {
        $this->infograph_title = null;
        $this->infograph_image = null;
        $this->infograph_Target_ID = null;
        $this->infograph_order = null;
        $this->infograph_message = null;
    }

    public function loadModel() {
        $founded_infograph = DashboardInfograph::find($this->infograph_Target_ID);
        $this->infograph_title = $founded_infograph -> infograph_title;
        $this->infograph_order = $founded_infograph -> infograph_order;
        $this->infograph_image = $founded_infograph -> infograph_image;
        $this->infograph_message = $founded_infograph -> infograph_message;
    }

    public function export()
    {
        return response()->download(public_path('storage/infograph_pictures/' . $this->infograph_image));
    }

    public function read($search) {
        if(empty($search)) {
            return DashboardInfograph::orderBy('created_at', 'desc')->paginate(9);
        }
        else {
            return DashboardInfograph::where('infograph_title', 'LIKE', '%' . $search . '%')->orWhere('infograph_order', '=', $search)->orWhere('infograph_message', 'LIKE', '%' . $search . '%')->orderBy('infograph_order', 'asc')->paginate(9);
        }
    }

    public function render()
    {
        return view('livewire.dashboard-content', [
            'showAllInfographs' => $this->read($this->search),
        ]);
    }
}
