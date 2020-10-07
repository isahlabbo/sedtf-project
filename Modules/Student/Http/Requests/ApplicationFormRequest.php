<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "gender" => "required",
            "marital_status" => "required",
            "date_of_birth" => "required|string",
            "religion" => "required|string",
            "email" => "required|email|unique:applications",
            "phone" => "required",
            "country" => "required",
            "state" => "required",
            "lga" => "required",
            "address" => "required|string",
            "sponsor_name" => "required|string",
            "sponsor_address" => "required|string",
            "qualification_type_id" => "required",
            "year" => "required",
            "image" => "required",
        ];
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
