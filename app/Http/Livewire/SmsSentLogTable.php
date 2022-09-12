<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SentMessageLog;

class SmsSentLogTable extends Component
{
    use WithPagination;
    public $search;

    public function read($search) {
        if(empty($search)) {
            return SentMessageLog::orderBy('created_at', 'desc')->paginate(3);
        }
        else {
            return SentMessageLog::where('Sent_Message', 'LIKE', '%' . $search . '%')->orWhere('Sent_Sender', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'desc')->paginate(3);
        }
    }

    public function render()
    {
        return view('livewire.sms-sent-log-table', [
            'SentMessagelogs' => $this->read($this->search),
        ]);
    }
}
