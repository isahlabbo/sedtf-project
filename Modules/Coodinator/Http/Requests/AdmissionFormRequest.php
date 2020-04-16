<?php

namespace Modules\Coodinator\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "gender" => "required",
            "religion" => "required",
            "admissionNo" => "required",
            "phone" => "required",
            "state" => "required",
            "lga" => "required",
            "address" => "required",
            "picture" => 'required|image|mimes:jpeg,bmp,png,jpg'
        ];
        if($this->has('email')){
            $rules['email'] = "required|email";
        }
        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
