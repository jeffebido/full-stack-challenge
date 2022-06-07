<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contacts;
use App\Models\Appointments;
use App\Models\PageViews;

class DashboardController extends Controller
{

        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){

        $data = [
            'user' => Auth::user(),
            'contacts' => Contacts::limit(3)->orderByDesc('created_at')->get(),
            'appointments' => Appointments::limit(10)->orderByDesc('created_at')->get(),
            'countContacts' => count(Contacts::get()),
            'countAppointments' => count(Appointments::get()),
            'pageViews' => PageViews::first()
        ];



        return view("admin.pages.dashboard", $data);
    }
}
