<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail;
use Kavenegar;
use DB;
use Redirect;
use Carbon\Carbon;
use App\Models\User;

class LoginToken extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'token';
    }


    public static function generateFor(User $user)
    {
        $lastAttempt = LoginToken::where('user_id', '=', $user->id)->latest()->first();
        // return Carbon::now()->diffInMinutes($lastAttempt->updated_at);
        if (!empty($lastAttempt)) {
            // if (Carbon::now()->diffInMinutes($lastAttempt->updated_at) < 1) {
            //     return Redirect::back()->withErrors(['کمتر از ۵ دقیقه از تلاش قبلی شما می‌گذرد']);
            // } else {
                $lastAttempt->touch();
                return LoginToken::where('user_id', '=', $user->id)->first();
            // }
        } else {
            return static::create([
                'user_id' => $user->id,
                'token' => mt_rand(10000, 99999)
            ]);
        }

    }

    public function send()
    {
        
        $url = $this->token;
        Mail::raw(
            "<a href='{$url}'> {$url} </a>",
            function ($message) {
                $message->to('aut0run2011@gmail.com')->subject('کد تائید');
            }
        );

        try {
            $sender = "10004346";
            $message = $url;
            $receptor = $this->user->phone;
            // $result = Kavenegar::Send($sender, $receptor, $message);
            $result = Kavenegar::VerifyLookup($receptor, $message, null, null, 'setara-auth');
        } catch (\Kavenegar\Exceptions\ApiException $e) {
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            // echo $e->errorMessage();
            return Redirect::back()->withErrors(['error', $e->errorMessage()]);
        } catch (\Kavenegar\Exceptions\HttpException $e) {
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            return Redirect::back()->withErrors(['error', $e->errorMessage()]);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
