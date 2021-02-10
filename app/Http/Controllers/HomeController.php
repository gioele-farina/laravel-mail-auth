<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\TestEmail;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function writeMail() {
      return view('pages.writeMail');
    }
    public function sendMail(Request $request){
      $request -> validate([
        'message' => 'required|string'
      ]);

      $mail = Auth::user() -> email;

      Mail::to($mail)->send(new TestEmail($request['message']));
      return redirect() -> route('write-mail');
    }
}
