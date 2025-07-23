<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SmtpSetting;
use Illuminate\Http\Request;

class SmtpSetttingController extends Controller

{
    public function SmtpSetting(){
$smtp = SmtpSetting::find(1) ?? new SmtpSetting();
        return view('smtp_configuration', compact('smtp'));

    }
    public function SmtpUpdate(Request $request){
        $smtp = SmtpSetting::find($request->id);

    if ($smtp) {
        // Update if exists
        $smtp->update([
            'mailer' => $request->mailer,
            'host' => $request->host,
            'port' => $request->port,
            'username' => $request->username,
            'password' => $request->password,
            'encryption' => $request->encryption,
            'from_address' => $request->from_address,
        ]);
    } else {
        // Create if not exists
        SmtpSetting::create([
            'mailer' => $request->mailer,
            'host' => $request->host,
            'port' => $request->port,
            'username' => $request->username,
            'password' => $request->password,
            'encryption' => $request->encryption,
            'from_address' => $request->from_address,
        ]);
    }

    return redirect()->back()->with('success', 'SMTP Setting Saved Successfully');
    }

}
