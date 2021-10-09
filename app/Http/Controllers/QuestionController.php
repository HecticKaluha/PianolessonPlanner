<?php

namespace App\Http\Controllers;

use App\Jobs\SendQuestionReceived;
use App\Mail\NewQuestionReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class QuestionController extends Controller
{
    public function sendQuestion(Request $request){
        $response = [
            'success' => false,
            'exception' => false,
            'exceptionMessage' => '',
            'message' => '',
            'errors' => '',
        ];

        $rules = [
            'qfFullName' => 'required',
            'qfEmail' => 'required|email:rfc,dns',
            'qfMessage' => 'required|min:20',
            'qfCheckS' => 'max:0'
        ];

        $messages = [
            'qfFullName.required' => 'The full name field is required.',
            'qfEmail.required' => 'The e-mail field is required.',
            'qfEmail.email' => 'The e-mail field must be a valid e-mail address.',
            'qfMessage.required' => 'The message field is required.',
            'qfMessage.min' => 'The message field must be at least 20 characters.',
            'qfCheckS.max' => "You filled out a spam prevention field that shouldn't be filled in... We didn't take your request into account."
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if (!$validator->fails()) {
            try{
                Log:info($request->all());
                $this->sendQuestionMail($request->all());
                $response['success'] = true;
                $response['message'] = 'Message successfully sent!';
            }
            catch(Throwable $e){
                $response['message'] = 'There was an error when processing your question. Try again later.';
                $response['exception'] = true;
                $response['exceptionMessage'] = [$e->getMessage()];
            }
        }else{
            $response['message'] = 'There was something wrong with the data you entered.';
            $response['errors'] = $validator->messages();
        }
        return $response;
    }

    public function sendQuestionMail($data){
        SendQuestionReceived::dispatch($data);
    }
}



