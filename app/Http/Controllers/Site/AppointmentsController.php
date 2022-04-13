<?php

namespace App\Http\Controllers\Site;

use App\Models\Appointments;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentsForm;

class AppointmentsController extends Controller
{

    public function send(AppointmentsForm $request){
        

        Appointments::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'phone' => $request->phone,
            'time' => date('Y-m-d H:i:s', strtotime( $request->date . $request->time)),
            'notes' => $request->notes
        ]);



        return redirect()->route('site.home');


    }

}
