<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'sometimes|integer|between:1950,' . now()->format('Y'),
            'max_speed' => 'sometimes|integer|between:0,350',
            'is_automatic' => 'sometimes|boolean|',
            'engine' => 'sometimes|integer|between:750,6000',
            'number_of_doors' => 'sometimes|integer|between:1,5',
        ];
    }
}
