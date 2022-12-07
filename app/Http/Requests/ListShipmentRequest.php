<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListShipmentRequest extends FormRequest
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
            'week' => 'required|integer|max:52|min:1',
            'year' => 'sometimes|nullable|date_format:Y'
        ];
    }
}
