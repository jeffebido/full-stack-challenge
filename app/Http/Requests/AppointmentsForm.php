<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentsForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required',
            'email'   => 'required|email',
            'service'   => 'required',
            'phone'   => 'required',
            'date'   => 'required',
            'time'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Name is required.',
            'email.required'   => 'Email is required.',
            'email.email'      => 'Enter a valid email address.',
            'phone.required'    => 'Phone is required.',
            'date.required'    => 'The day is required.',
            'time.required'    => 'The time is required.',
        ];
    }
}
