<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactUsMail;
use Mail;


class ContactUs extends Model
{
    // use HasFactory;

    protected $fillable = ['name', 'email', 'message', 'phone'];


    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $ocnetMail = "hello@ocnet.com";
            Mail::to($ocnetMail)->send(new ContactUsMail($item));
        });
    }
}
