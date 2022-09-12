<?php

namespace App\Http\Livewire;
use App\Models\smsTemplate;

use Livewire\Component;

class SmsComposeMessage extends Component
{

    protected $listeners = ['refreshTheAvailableTemplate' => 'render'];

    public $selectedTemplate;

    public function allSMSTemplates() {
        return smsTemplate::all();
    }


    public function render()
    {
        return view('livewire.sms-compose-message', [
            'all_templates' => $this->allSMSTemplates(),
        ]);
    }
}
