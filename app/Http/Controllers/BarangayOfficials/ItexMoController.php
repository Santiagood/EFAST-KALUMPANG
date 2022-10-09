<?php

namespace App\Http\Controllers\BarangayOfficials;
use Carbon\Carbon;
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
    public $Status_Message;

    public function itexmo($Message, $ChunkOfResidentsNumber){
        $email = env('ITEXMO_email');
        $passwd = env('ITEXMO_passwd');
        $apicode = env('ITEXMO_apicode');
        $number = $ChunkOfResidentsNumber;

        $status = DB::table('river_levels')
                ->select('river_status')
                ->orderBy('created_at', 'desc')
                ->first()->river_status;

        $level = DB::table('river_levels')
                ->select('river_level')
                ->orderBy('created_at', 'desc')
                ->first()->river_level;

        $time = DB::table('river_levels')
                ->select('time')
                ->orderBy('created_at', 'desc')
                ->first()->time;

        $date = DB::table('river_levels')
                ->select('date')
                ->orderBy('created_at', 'desc')
                ->first()->date;

        $formattedDate  = \Carbon\Carbon::parse($date)->format('M. d, Y');

        $message = str_replace("@river-status@", $status,
                   str_replace("@river-level@", $level,
                   str_replace("@river-time@", $time,
                   str_replace("@river-date@", $formattedDate, $Message))));

        $senderID = 'EFAST-Kalumpang';

        $ch = curl_init();
        $itexmo = array('Email'=>$email, 'Password'=>$passwd, 'ApiCode'=>$apicode, 'Recipients'=>$number, 'Message'=>$message, 'SenderId'=>$senderID);

        curl_setopt($ch, CURLOPT_URL,"https://api.itexmo.com/api/broadcast");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close ($ch);
        $output = \json_decode($output);
        $isError = $output->Error;

        if($isError) {
            $this->Status = 'Failed';
            $this->Status_Message = $output->Message;
        }
        else {
            $this->Status = 'Success';
            $this->Status_Message = $output->Message;
        }

    }

    public function saveToSentMessageLogTable() {
        $sentMessage = new SentMessageLog;
        $sentMessage->Sent_Message = $this->Message;
        $sentMessage->Sent_Sender = $this->Sender;
        $sentMessage->Sent_Status = $this->Status;
        $sentMessage->Sent_Status_Message = $this->Status_Message;
        $sentMessage->save();
    }


    public function sendSMS(Request $request) {
        $this->Sender = Auth::user()->name;
        $this->Message = $request->message;

        User::where('isVerified', '=', 1)->chunk(200, function($residents) {
            foreach ($residents as $resident) {
                $ChunkOfResidentsNumber[] = $resident->mobile_number;
            }
            $this->itexmo($this->Message, $ChunkOfResidentsNumber);
        });

        $this->saveToSentMessageLogTable();

        return view('BarangayOfficials.SMSTemplate');
    }

}
