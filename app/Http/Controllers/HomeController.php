<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\CustomerWhataa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',

        ]);
        Mail::to('amosaka55@gmail.com')->send(new SendMail($request->all()));
        return back();
    }

    public function downlaodWhataa()
    {
        return Inertia::render("FormDownload");
    }
    public function downlaodSend(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $cus=CustomerWhataa::query()->where("email",$data["email"])->first();
        if(!$cus){
            $result= CustomerWhataa::create($data);
        }


        return redirect('/');
    }

}
