<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\smsTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class SmsTemplateCreator extends Component
{
    public $modalFormVisible = false;

    public $SMS_Template_Title;
    public $SMS_Template_Message;
    public $SMS_Template_Author;
    public $SMS_Template_IsDefault;

    /**
     * createShowModal shows the modal when set to true,
     * by default it is set to false.
     *
     * @return void
     */
    public function createShowModal() {
        $this->modalFormVisible = true;
    }

    public function rules() {
        return [
            'SMS_Template_Title' => ['required', 'unique:sms_templates,SMS_Template_Title'],
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
            'SMS_Template_Author' => Auth::user()->email,
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
        // $this->emit('pg:eventRefresh-smsTemplateDatatable');
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
    }

    /**
     * render the SmsTemplateCreator livewire components
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.sms-template-creator');
    }
}
