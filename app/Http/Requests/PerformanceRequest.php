<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class PerformanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'info' => 'required',
            'date' => 'required',
            'locations' => 'required',
            'tickets' => 'required',
            'image'=>'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'=> "Please provide valid name with more than 5 and less than 255 characters",
            'info.required'=>"Please give information about the ticket",
            'date.required'=> "Please add a date!",
            'locations.required'=> "Please add a location!",
            'tickets.required'=> "Please add tickets!",
            'image.required'=> "Please add an image!",

        ];
    }
}
