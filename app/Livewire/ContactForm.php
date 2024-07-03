<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $content;

    public $successMessage;

   
    public $captcha = null;
 
    public function updatedCaptcha($token)
    {
        $response = Http::post(
            'https://www.google.com/recaptcha/api/siteverify?secret='.
            env('CAPTCHA_SECRET_KEY').
            '&response='.$token
        );
     
        $success = $response->json()['success'];
     
        if (! $success) {
            throw ValidationException::withMessages([
                'captcha' => __('Google thinks, you are a bot, please refresh and try again!'),
            ]);
        } else {
            $this->captcha = true;
        }
    }
    

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => ['required', 'regex:/^\+?[0-9]+$/'],
        'content' => 'required',
        'captcha' => ['required'],
        
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
        $this->recaptcha = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
