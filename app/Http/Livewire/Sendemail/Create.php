<?php

namespace App\Http\Livewire\Sendemail;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Create extends Component
{
    public $recipients = [];
    public $content = "";
    public $subject = "";

    protected $rules = [
        'recipients.*' => 'email',
        'subject' => 'required',
        'content' => 'required',
    ];


    public function sendEmail() {

        $this->validate();
        // SEND THIS EMAIL TO ALL RECIPIENTS
        foreach ($this->recipients as $email) {
            Mail::to($email)->queue(new SendEmail($this->subject, $email, $this->content));
        }

        $this->recipients = [];
        $this->content = "";
        $this->subject = "";

        session()->flash('success', 'Successfully send emails.');
    }

    public function render()
    {
        return view('livewire.sendemail.create');
    }
}
