<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\RiverLevel;
use App\Models\smsTemplate;
use App\Models\SentMessageLog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RiverLevelCheckerSchedule extends Command
{

    public $Message;
    public $Sender;
    public $Status;
    public $Status_Message;
    public $riverLevelID;
    public $isError;


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'riverlevelchecker:every15Minutes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'an artisan command to retrieve the latest river level and take action based on it';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $latestRiverLevel = DB::table('river_levels')->select('river_level')->orderBy('created_at', 'desc')->first()->river_level;
        $riverLevelIsReported = DB::table('river_levels')->select('isReported')->orderBy('created_at', 'desc')->first()->isReported;
        $this->riverLevelID = DB::table('river_levels')->select('id')->orderBy('created_at', 'desc')->first()->id;

        if($latestRiverLevel <= 14.9) {
            echo 'normal';

        }
        elseif($latestRiverLevel >= 15 && $latestRiverLevel < 16) {
            echo '1st Alarm';
            if($riverLevelIsReported == false)
                $this->sendSMS();
            else
                echo 'walang gagawin';
        }
        elseif($latestRiverLevel >= 16 && $latestRiverLevel < 17) {
            echo '2nd Alarm';
            if($riverLevelIsReported == false)
                $this->sendSMS();
            else
                echo 'walang gagawin';
        }
        elseif($latestRiverLevel >= 17 && $latestRiverLevel < 18) {
            echo '3rd Alarm';
            if($riverLevelIsReported == false)
                $this->sendSMS();
            else
                echo 'walang gagawin';
        }
        elseif($latestRiverLevel >= 18 && $latestRiverLevel < 19) {
            echo '4th Alarm';
            if($riverLevelIsReported == false)
                $this->sendSMS();
            else
                echo 'walang gagawin';
        }
        else {
            echo 'Beyond 5th Alarm';
            if($riverLevelIsReported == false)
                $this->sendSMS();
            else
                echo 'walang gagawin';
        }

    }

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

        $senderID = 'VIA ITEXMO';

        $ch = curl_init();

        $itexmo = array('Email'=>$email, 'Password'=>$passwd, 'ApiCode'=>$apicode, 'Recipients'=>$number, 'Message'=>$message, 'SenderId'=>$senderID);

        curl_setopt($ch, CURLOPT_URL,"https://api.itexmo.com/api/broadcast");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close ($ch);
        $output = \json_decode($output);
        $this->isError = $output->Error;

        if($this->isError) {
            $this->Status = 'Failed';
            $this->Status_Message = $output->Message;
        }
        else {
            $this->Status = 'Success';
            $this->Status_Message = $output->ReferenceId;

        }

    }

    public function sendSMS() {
        $this->Sender = 'Automated by EFAST-Kalumpang';
        $this->Message = DB::table('sms_templates')->select('SMS_Template_Message')->where('SMS_Template_IsDefault', '=', 1)->first()->SMS_Template_Message;


        User::where('isVerified', '=', 1)->chunk(200, function($residents) {
            foreach ($residents as $resident) {
                $ChunkOfResidentsNumber[] = $resident->mobile_number;
            }
            $this->itexmo($this->Message, $ChunkOfResidentsNumber);
        });

        $this->updateIsReported();
        $this->saveToSentMessageLogTable();
    }

    public function saveToSentMessageLogTable() {
        $sentMessage = new SentMessageLog;
        $sentMessage->Sent_Message = $this->Message;
        $sentMessage->Sent_Sender = $this->Sender;
        $sentMessage->Sent_Status = $this->Status;
        $sentMessage->Sent_Status_Message = $this->Status_Message;
        $sentMessage->save();
    }

    public function updateIsReported() {
        if($this->isError)
            RiverLevel::find($this->riverLevelID)->update($this->DataToBeStoredFailed());
        else
            RiverLevel::find($this->riverLevelID)->update($this->DataToBeStoredSuccess());
    }

    public function DataToBeStoredSuccess() {
        return [
            'isReported' => true,
        ];
    }

    public function DataToBeStoredFailed() {
        return [
            'isReported' => false,
        ];
    }
}
