<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClientsFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id?? '';
        $rules = [
            'name' => 'required|string|max:100|min:3',
            'email'=>'required|email|unique:clients,email,{$id},id',
            'phone'=> 'required|string|min:9|unique:clients,phone,{$id},id',
            'request'=>'string|max:200|min:1',
            'trademark'=>'string|max:100|min:1'
        ];

        if($this->method('PUT'))
        {
            $rules['trademark']=[
                'nullable',
                'min:4',
                'max:12'
            ];
        }

        return $rules;
    }
}
