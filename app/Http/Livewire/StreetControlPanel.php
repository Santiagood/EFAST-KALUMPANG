<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\KalumpangStreet;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class StreetControlPanel extends Component
{
    use WithPagination;

    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $Street_name;
    public $Priority;

    public $street_Target_ID;
    public $search = '';

    public function mount() {
        $this->resetPage();
    }

    public function createShowModal() {
        $this->resetVariables();
        $this->resetValidation();
        $this->modalFormVisible = true;
    }

    public function resetVariables() {
        $this->Street_name = null;
        $this->Priority = null;
        $this->street_Target_ID = null;
    }

    public function rules() {
        return [
            'Street_name' => ['required', Rule::unique('kalumpang_streets','Street_name')->ignore($this->street_Target_ID)],
            'Priority' => ['required'],
        ];
    }

    public function store() {
        $this->validate();
        KalumpangStreet::create($this->DataToBeStored());
        $this->modalFormVisible = false;
        $this->resetVariables();
    }

    public function DataToBeStored() {
        return [
            'Street_name' => $this->Street_name,
            'Priority' => $this->Priority,
        ];
    }

    public function loadModel() {
        $founded_street = KalumpangStreet::find($this->street_Target_ID);
        $this->Street_name = $founded_street -> Street_name;
        $this->Priority = $founded_street -> Priority;
    }

    public function updateShowModal($id) {
        $this->resetValidation();
        $this->resetVariables();
        $this->street_Target_ID = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }

    public function update() {
        $this->validate();
        KalumpangStreet::find($this->street_Target_ID)->update($this->DataToBeStored());
        $this->modalFormVisible = false;
    }


    public function read($search) {
        if(empty($search)) {
            return KalumpangStreet::paginate(5);
        }
        else {
            return KalumpangStreet::where('Street_name', 'LIKE', '%' . $search . '%')->orWhere('Priority', '=', $search )->paginate(5);
        }
    }

    public function delete() {
        KalumpangStreet::destroy($this->street_Target_ID);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }

    public function deleteShowModal($id) {
        $this->street_Target_ID = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function render()
    {
        return view('livewire.street-control-panel', [
            'allStreets' => $this->read($this->search),
        ]);
    }
}
