<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildingRequest extends FormRequest
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
            //
        
            'img' => 'nullable|mimes:jpg,jpeg,bmp,png',
            
            'name' => 'required|string|min:3|max:100',

            'price' => 'required|integer',
            
            'thing_id'=> 'required|integer',
            
            'rent'=> 'required|integer',
            
            'car_id'=> 'required|integer',

            'carModel'=> 'nullable|integer',

            'carCarb'=> 'nullable|integer',
            
            'largDisc' => 'required|min:5|max:200', 

           'tag_list' => 'nullable|array',

            'lang' => 'nullable|integer', 

            'lat'=> 'nullable|integer',

            'status'=> 'nullable|integer',

            'area_id'=> 'required|integer',

            'tel' => 'required|string|min:8|max:14',

            'thingKind' => 'required|integer',

            
        
        ];

    }

    public function messages()
    {
        
        $messages = [
        /*
        'same'    => 'The :attribute and :other must match.',
        'size'    => 'The :attribute must be exactly :size.',
        'between' => 'The :attribute must be between :min - :max.',
        'in'      => 'The :attribute must be one of the following types: :values',
        */
        ];

        return [
        /*
            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',
        */
        ];

    }
}
