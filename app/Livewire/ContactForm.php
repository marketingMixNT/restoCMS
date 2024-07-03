<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $content;

    public $successMessage;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => ['required', 'regex:/^\+?[0-9]+$/'],
        'content' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        Mail::send('emails.contact-form-email', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'content' => $this->content,
        ], function ($message) {
            $message->from(env('MAIL_USERNAME'))
                ->to(env('MAIL_TO'))
                ->subject('Nowa wiadomość ze strony guidos.pl');
        });

        $this->successMessage = 'Dziękujemy za wiadomość! Odpowiemy najszybciej jak to możliwe!';

        $this->resetForm();

        session()->flash('success_message', $this->successMessage);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
