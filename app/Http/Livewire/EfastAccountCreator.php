<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\KalumpangStreet;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Role;

class EfastAccountCreator extends Component
{
    protected $listeners = ['refreshTheAccoutControl' => 'render'];

    use WithPagination;

    public $Residents_Name;
    public $Residents_Gender;
    public $Residents_Mobile_Number;
    public $Residents_Address;
    public $Residents_Roles_ID;
    public $Residents_Email;
    public $Residents_Birthday;
    public $Residents_registerMeAs;

    public $Resident_Target_ID;
    public $search;

    public $modalCreateVisible = false;
    public $modalUpdateVisible = false;
    public $modalDeleteVisible = false;


    public function mount() {
        $this->resetPage();
    }

    public function createShowModal() {
        $this->resetVariables();
        $this->modalCreateVisible = true;
    }

    public function updateShowModal($id) {
        $this->resetValidation();
        $this->resetVariables();
        $this->Resident_Target_ID = $id;
        $this->modalUpdateVisible = true;
        $this->loadModel();
    }

    public function deleteShowModal($id) {
        $this->Resident_Target_ID = $id;
        $this->modalDeleteVisible = true;
    }


    /* ******************RULES******************** */
    public function rules() {
        return [
            'Residents_Name' => 'required',
            'Residents_Gender' => 'required',
            'Residents_Mobile_Number' => ['required', 'min: 11', 'max: 11', Rule::unique('users', 'mobile_number')->ignore($this->Resident_Target_ID)],
            'Residents_Address' => 'required',
            'Residents_Roles_ID' => ['required', 'numeric', 'min: 1', 'max: 2'],
            'Residents_Birthday' => ['required', 'date'],
        ];
    }

    /* ******************CREATE******************** */
    public function create() {
        $this->validate();
        User::create($this->DataToBeStored());
        $this->modalCreateVisible = false;
        $this->resetVariables();
    }

    public function DataToBeStored() {
        return [
           'name' => $this->Residents_Name,
           'gender' => $this->Residents_Gender,
           'roles_id' => $this->Residents_Roles_ID,
           'mobile_number' => $this->Residents_Mobile_Number,
           'address' => $this->Residents_Address,
           'birthday' => $this->Residents_Birthday,
           'registerMeAs' => $this->Residents_registerMeAs,
           'isVerified' => true,
        ];
    }

    public function resetVariables() {
        $this->Residents_Name = null;
        $this->Residents_Gender = null;
        $this->Residents_Mobile_Number = null;
        $this->Residents_Address = null;
        $this->Residents_Roles_ID = null;
        $this->Resident_Target_ID = null;
        $this->Residents_Birthday = null;
        $this->Residents_registerMeAs = null;
    }


    /* ******************UPDATE******************** */
    public function update() {
        $this->validate();
        User::find($this->Resident_Target_ID)->update($this->DataToBeStored());
        $this->modalUpdateVisible = false;
    }

    public function loadModel() {
        $founded_user_resident = User::find($this->Resident_Target_ID);
        $this->Residents_Name = $founded_user_resident->name;
        $this->Residents_Mobile_Number = $founded_user_resident->mobile_number;
        $this->Residents_Address = $founded_user_resident->address;
        $this->Residents_Roles_ID = $founded_user_resident->roles_id;
        $this->Residents_Gender = $founded_user_resident->gender;
        $this->Residents_Email = $founded_user_resident->email;
        $this->Residents_Birthday = $founded_user_resident->birthday;
        $this->Residents_registerMeAs = $founded_user_resident->registerMeAs;
    }



    /* ******************DELETE******************** */
    public function delete() {
        User::destroy($this->Resident_Target_ID);
        $this->modalDeleteVisible = false;
        $this->resetPage();
    }


    public function read($search) {
        if(empty($search)) {
            return User::where('isVerified', '=', true)->orderBy('created_at', 'desc')->paginate(5);
        }
        else {
            return User::where('isVerified', '=', true)
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
        return view('livewire.efast-account-creator', [
            'EfastAccounts' => $this->read($this->search),
        ]);
    }
}
