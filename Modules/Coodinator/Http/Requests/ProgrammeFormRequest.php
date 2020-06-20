<?php

namespace Modules\Coodinator\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgrammeFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'code'=>'required|string',
            'type'=>'required',
            'batches'=>'required',
            'semesters'=>'required',
            'fee'=>'required',
            'duration'=>'required',
            'duration'=>'required',
            'about'=>'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(coodinator())
            return true;
    }
}
