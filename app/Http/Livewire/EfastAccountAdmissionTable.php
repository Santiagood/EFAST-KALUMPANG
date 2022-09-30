<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class EfastAccountAdmissionTable extends Component
{
    use WithPagination;

    public $Residents_Target_ID;
    public $Residents_ID_Picture;
    public $Residents_name;
    public $search;

    public $modalViewAccountVisible = false;


    public function mount() {
        $this->resetPage();
    }

    public function accountViewShowModal($id) {
        $this->resetVariables();
        $this->Residents_Target_ID = $id;
        $this->modalViewAccountVisible = true;
        $this->loadModel();
    }


    public function loadModel() {
        $founded_user_resident = User::find($this->Residents_Target_ID);
        $this->Residents_ID_Picture = $founded_user_resident->id_picture;
        $this->Residents_name = $founded_user_resident->name;
    }

    public function resetVariables() {
        $this->Residents_Target_ID = null;
        $this->Residents_ID_Picture = null;
        $this->Residents_name = null;
    }

    public function accept($id) {
        $this->resetVariables();
        $this->Residents_Target_ID = $id;
        User::find($this->Residents_Target_ID)->update($this->DataToBeStored());
        $this->resetPage();
        $this->emit('refreshTheAccoutControl');
    }

    public function deny($id) {
        $this->resetVariables();
        $this->Residents_Target_ID = $id;
        User::destroy($this->Residents_Target_ID);
        $this->resetPage();
    }

    public function DataToBeStored() {
        return [
           'isVerified' => true,
        ];
    }


    public function read($search) {
        if(empty($search)) {
            return User::where('isVerified', '=', false)->orderBy('created_at', 'desc')->paginate(5);
        }
        else {
            return User::where('isVerified', '=', false)
            ->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('mobile_number', '=', $search)
            ->orWhere('registerMeAs','=', $search)
            ->orWhere('gender', '=', $search)
            ->orWhere('address', 'LIKE', '%' . $search . '%')
            ->orderBy('name', 'asc')->paginate(5);
        }
    }

    public function render()
    {
        return view('livewire.efast-account-admission-table', [
            'EfastAdmission' => $this->read($this->search)
        ]);
    }
}
