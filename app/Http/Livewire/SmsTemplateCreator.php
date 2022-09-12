<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\smsTemplate;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class SmsTemplateCreator extends Component
{
    use WithPagination;

    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;

    public $SMS_Template_Title;
    public $SMS_Template_Message;
    public $SMS_Template_Author;
    public $SMS_Template_IsDefault;

    public $SMS_Template_Target_ID;
    public $search = '';

    public function mount() {
        $this->resetPage();
    }


    // ************************************************************************** //
                        // all here are for insert or store

    /**
     * createShowModal shows the modal when set to true,
     * by default it is set to false.
     *
     * @return void
     */
    public function createShowModal() {
        $this->resetVariables();
        $this->resetValidation();
        $this->modalFormVisible = true;
    }

    /**
     * rules the rules that the validator will read before submiting the data to
     * the database
     *
     * @return void
     */
    public function rules() {
        return [
            'SMS_Template_Title' => ['required', Rule::unique('sms_templates','SMS_Template_Title')->ignore($this->SMS_Template_Target_ID)],
            'SMS_Template_Message' => ['required', 'min:2', 'max:639'],
        ];
    }

    /**
     * DataToBeStored is the items you will pass in the store method
     *
     * @return void
     */
    public function DataToBeStored() {
        return [
            'SMS_Template_Title' => $this->SMS_Template_Title,
            'SMS_Template_Message' => $this->SMS_Template_Message,
            'SMS_Template_Author' => Auth::user()->name,
        ];
    }

    /**
     * store is the insert method we use in this component to insert in the database
     * the sms template we created
     *
     * @return void
     */
    public function store() {
        $this->validate();
        smsTemplate::create($this->DataToBeStored());
        $this->modalFormVisible = false;
        $this->resetVariables();
        $this->emit('refreshTheAvailableTemplate');
    }

    /**
     * resetVariables resets the variables data to nothing or null
     *
     * @return void
     */
    public function resetVariables() {
        $this->SMS_Template_Title = null;
        $this->SMS_Template_Message = null;
        $this->SMS_Template_Author = null;
        $this->SMS_Template_Target_ID = null;
    }



    // ************************************************************************** //
                        // all here are for update


    /**
     * updateShowModal shows again the modal but this time it contains all the datas
     * about a certain id in sms template
     *
     * @param  mixed $id
     * @return void
     */
    public function updateShowModal($id) {
        $this->resetValidation();
        $this->resetVariables();
        $this->SMS_Template_Target_ID = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }


    /**
     * loadModel loads the data in the founded sms template variable from the sms template table
     * so that we can use it as reference
     *
     * @return void
     */
    public function loadModel() {
        $founded_sms_template = smsTemplate::find($this->SMS_Template_Target_ID);
        $this->SMS_Template_Title = $founded_sms_template -> SMS_Template_Title;
        $this->SMS_Template_Message = $founded_sms_template -> SMS_Template_Message;
        $this->SMS_Template_Author = $founded_sms_template -> SMS_Template_Author;
    }


    /**
     * update the update functionality
     * it finds the target to be updated then change the data into latest
     *
     * @return void
     */
    public function update() {
        $this->validate();
        smsTemplate::find($this->SMS_Template_Target_ID)->update($this->DataToBeStored());
        $this->modalFormVisible = false;
        $this->emit('refreshTheAvailableTemplate');
    }


    // ************************************************************************** //
                    // all here are for delete


    /**
     * deleteShowModal again this one is similar to the first modal component
     * except this one only needed to confirm the delete and nothing
     * much in the interaction with the data
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteShowModal($id) {
        $this->SMS_Template_Target_ID = $id;
        $this->modalConfirmDeleteVisible = true;
    }


    public function delete() {
        smsTemplate::destroy($this->SMS_Template_Target_ID);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
        $this->emit('refreshTheAvailableTemplate');
    }



    /**
     * read
     *
     * @return void
     */
    public function read($search) {
        // return smsTemplate::paginate(3);


        if(empty($search)) {
            return smsTemplate::paginate(5);
        }
        else {
            return smsTemplate::where('SMS_Template_Message', 'LIKE', '%' . $search . '%')->orWhere('SMS_Template_Title', 'LIKE', '%' . $search . '%')->paginate(5);
        }
    }


    /**
     * render the SmsTemplateCreator livewire components
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.sms-template-creator', [
            'allSMSTemplateContent' => $this->read($this->search),
        ]);
    }
}
