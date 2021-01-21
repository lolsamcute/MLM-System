<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{

    public $details;


      public function welcome()
      {
          return view('welcome');
      }



      public function about()
      {
          return view('about');
      }


      public function faq()
      {
          return view('faq');
      }



      public function support()
      {
          return view('support');
      }



      public function rulesRegulation()
      {
          return view('rulesRegulation');
      }


      public function privacy()
      {
          return view('privacy');
      }


      public function supportPost(Request $request)
      {
          $request->validate([
              'name' => 'string|max:255',
              'email' => 'string|max:255',
              'subject' => 'string|max:255',
              'message' => 'string|max:255',
          ]);

            $supports = new Support();
          $supports->name = $request->name;
          $supports->email = $request->email;
          $supports->subject = $request->subject;
          $supports->message = $request->message;
          $supports->save();


          return back()->with('success', "Your Ticket is Sumbitted Successfully, Our Support team will get back to you shortly within 24hrs");
      }



          /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request) {

        try{

            $d = new SendMail();
          $d->name = $request->name;
          $d->email = $request->email;
          $d->subject = "Contact Email From  ". $request->name;
          $d->message = $request->message;


         Mail::to('jm2498228@gmail.com')->send($d);

         $request->session()->flash('success', "Success!! We will be in touch!");

          return back();
        }catch(\Exception $e) {

            $request->session()->flash('error', "Failed!! Please try again!". $e->getMessage());

            return back();
        }


      }

}
