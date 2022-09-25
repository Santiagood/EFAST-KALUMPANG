<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DashboardInfograph;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardContentControlPanel extends Component
{

    use WithPagination;
    use WithFileUploads;

    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $infograph_title;
    public $infograph_image;
    public $infograph_order;
    public $infograph_message;
    public $infograph_image_preloaded;


    public $infograph_Target_ID;
    public $search = '';

    public function mount() {
        $this->resetPage();
    }

    // create
    public function createShowModal() {
        $this->resetVariables();
        $this->resetValidation();
        $this->modalFormVisible = true;
    }

    public function resetVariables() {
        $this->infograph_title = null;
        $this->infograph_image = null;
        $this->infograph_Target_ID = null;
        $this->infograph_order = null;
        $this->infograph_message = null;
        $this->infograph_image_preloaded = null;
    }

    public function rules() {
        return [
            'infograph_title' => ['required', Rule::unique('dashboard_infographs','infograph_title')->ignore($this->infograph_Target_ID)],
            'infograph_image' => ['required','image','mimes:jpg,png,jpeg','max:20000'],
            'infograph_order' => ['required'],
        ];
    }

    // upload the data to the database
    public function store() {
        $this->validate();
        DashboardInfograph::create($this->DataToBeStored());
        $this->infograph_image->store('public/infograph_pictures');
        $this->modalFormVisible = false;
        $this->resetVariables();
    }

    public function DataToBeStored() {
        return [
            'infograph_title' => $this->infograph_title,
            'infograph_image' => $this->infograph_image->hashName(),
            'infograph_order' => $this->infograph_order,
            'infograph_message' => $this->infograph_message,
        ];
    }


    public function read($search) {
        if(empty($search)) {
            return DashboardInfograph::orderBy('infograph_order', 'asc')->paginate(5);
        }
        else {
            return DashboardInfograph::where('infograph_title', 'LIKE', '%' . $search . '%')->orWhere('infograph_order', '=', $search)->orWhere('infograph_message', 'LIKE', '%' . $search . '%')->orderBy('infograph_order', 'asc')->paginate(5);
        }
    }

    public function loadModel() {
        $founded_infograph = DashboardInfograph::find($this->infograph_Target_ID);
        $this->infograph_title = $founded_infograph -> infograph_title;
        $this->infograph_order = $founded_infograph -> infograph_order;
        $this->infograph_image_preloaded = $founded_infograph -> infograph_image;
        $this->infograph_message = $founded_infograph -> infograph_message;
    }

    public function updateShowModal($id) {
        $this->resetValidation();
        $this->resetVariables();
        $this->infograph_Target_ID = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }

    public function update() {
        $this->validate();
        DashboardInfograph::find($this->infograph_Target_ID)->update($this->DataToBeStored());
        $this->infograph_image->store('public/infograph_pictures');
        $this->modalFormVisible = false;
    }

    public function deleteShowModal($id) {
        $this->infograph_Target_ID = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function delete() {
        DashboardInfograph::destroy($this->infograph_Target_ID);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.dashboard-content-control-panel', [
            'allInfographs' => $this->read($this->search),
        ]);
    }
}
