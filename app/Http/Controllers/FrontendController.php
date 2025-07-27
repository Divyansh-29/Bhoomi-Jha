<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Feedback;
use App\Models\Contact;
use App\Mail\FeedbackReceived;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    //

    public function contactus(){
        return view('frontend.contactus');
    }
    public function clientele(){
        return view('frontend.clientele');
    }
    public function career(){
        return view('frontend.career');
    }

    public function feedbackus(){
        return view('frontend.feedback');
    }
    
    public function contactsave(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ], 422);
        }
        
        // dd($request->all()); exit;
        
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->name;
        
        if ($contact->save()) {
            // $adminEmail = 'sahilkhan05861@gmail.com'; 
            // Mail::to($adminEmail)->send(new FeedbackReceived([
                //     'name' => $request->name,
                //     'email' => $request->email,
                //     'phone' => $request->phone,
                //     'subject' => $request->subject,
                //     'message' => $request->message,
                // ]));
                return response()->json([
                    'status' => true,
                    'message' => 'Message Send Successfully !'
                ]);
            }
            
        }
        
        public function feedbackussave(Request $request){
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required|numeric',
                'message' => 'required',
            ]);
            
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                    'message' => 'Validation failed',
                ], 422);
            }
            
            // dd($request->all()); exit;
            
            $feddback = new Feedback();
            $feddback->name = $request->name;
            $feddback->email = $request->email;
            $feddback->phone = $request->phone;
            $feddback->subject = $request->subject;
            $feddback->message = $request->name;
            
            if ($feddback->save()) {
                // $adminEmail = 'sahilkhan05861@gmail.com'; 
                // Mail::to($adminEmail)->send(new FeedbackReceived([
                    //     'name' => $request->name,
                    //     'email' => $request->email,
                    //     'phone' => $request->phone,
                    //     'subject' => $request->subject,
                    //     'message' => $request->message,
                    // ]));
                    return response()->json([
                        'status' => true,
                        'message' => 'Feedback / Complaint Send Successfully !'
                    ]);
                }
                
            }
            
            public function aboutus($slug){
                $page = 'frontend.aboutus.'.$slug;
                return view($page, compact('slug'));
            }
            public function sse($slug){
                $page = 'frontend.sse.'.$slug;
                return view($page, compact('slug'));
            }
            public function services($slug){
                $page = 'frontend.services.'.$slug;
                return view($page, compact('slug'));
            }
            
            public function solutions($slug){
                $page = 'frontend.solutions.'.$slug;
                return view($page, compact('slug'));
            }
        }
        