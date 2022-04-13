<?php

namespace App\Http\Controllers\Site;

use App\Models\Contacts;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactForm;


class ContactController extends Controller
{

    public function send(ContactForm $request){

        Contacts::create($request->all());

        return redirect()->route('site.home');
    }
}
