<?php

namespace App\Domain\Contacts\Jobs;

use App\Domain\Contacts\Models\ContactMessage;
use App\Domain\Contacts\Requests\ContactRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class SendMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private ContactRequest $request;
    public function __construct(ContactRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return string
     */
    public function handle()
    {
        DB::beginTransaction();
        try {
            $message = new ContactMessage();
            $message->name = $this->request->input('name');
            $message->email = $this->request->input('email');
            $message->phone = $this->request->input('phone');
            $message->message = $this->request->input('message');

            $message->save();
        } catch (\Exception $exception){
            DB::rollBack();
            throw $exception;
        }
        DB::commit();
        return $message;

    }
}
