<?php

namespace App\Http\Controllers\BarangayOfficials;
use App\Models\User;
use App\Models\smsTemplate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SentMessageLog;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItexMoController extends Controller
{
    public $Message;
    public $Sender;
    public $Status;

    public function itexmo($Message, $ChunkOfResidentsNumber){
        $email = env('ITEXMO_email');
        $passwd = env('ITEXMO_passwd');
        $apicode = env('ITEXMO_apicode');
        $number = $ChunkOfResidentsNumber;

        // $user = DB::table('users')
        //         ->select('name')
        //         ->orderBy('created_at', 'desc')
        //         ->first()->name;

        $status = 'normal';
        $level = 89;

        $message = str_replace("@river-status@", $status, str_replace("@river-level@", $level, $Message));

        $ch = curl_init();
        $itexmo = array('Email'=>$email, 'Password'=>$passwd, 'ApiCode'=>$apicode, 'Recipients'=>$number, 'Message'=>$message);

        curl_setopt($ch, CURLOPT_URL,"https://api.itexmo.com/api/broadcast");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close ($ch);
        $output = \json_decode($output);

        if($output->Error) {
            $this->Status = 'Failed';
        }
        else {
            $this->Status = 'Success';
        }
        dd($itexmo);
    }

    public function saveToSentMessageLogTable() {
        $sentMessage = new SentMessageLog;
        $sentMessage->Sent_Message = $this->Message;
        $sentMessage->Sent_Sender = $this->Sender;
        $sentMessage->Sent_Status = $this->Status;
        $sentMessage->save();
    }


    public function sendSMS(Request $request) {
        $this->Sender = Auth::user()->name;
        $this->Message = $request->message;
        // $this->Status = 'Success';

        User::chunk(3, function($residents) {
            foreach ($residents as $resident) {
                $ChunkOfResidentsNumber[] = $resident->mobile_number;
            }
            $this->itexmo($this->Message, $ChunkOfResidentsNumber);
        });

        $this->saveToSentMessageLogTable();

        return view('BarangayOfficials.SMSTemplate');
    }

}
