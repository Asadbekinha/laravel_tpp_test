<?php

namespace App\Http\Controllers;

use App\Domain\Contacts\Jobs\SendMessageJob;
use App\Domain\Contacts\Requests\ContactRequest;

class ContactController extends Controller
{
    public function sendMessage(ContactRequest $request){
        try{
            $this->dispatchNow(new SendMessageJob($request));
            return response("Sent!", 200);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }
}
