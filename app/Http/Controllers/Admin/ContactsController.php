<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contacts;
use App\Models\Appointments;

class ContactsController extends Controller
{
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){

        $data = [
            'contacts' => Contacts::limit(3)->orderByDesc('created_at')->get()
        ];

        return view("admin.pages.contacts", $data);
    }
}
