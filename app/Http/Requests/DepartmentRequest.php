<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'id' => 'required|integer',
            'code' => 'required|string|max:10',
            'name' => 'required|string|max:100',
            'created_by' => 'nullable|string|max:20',
            'created_at' => 'nullable|date',
            'history' => 'required|boolean',
        ];
    }
}
