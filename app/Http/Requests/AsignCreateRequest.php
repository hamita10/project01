<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignCreateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'pc_no'  => 'required',
            'student_id' => 'required',
            'teacher_id'  => 'required',
            'subject_id'  => 'required',
            'batch_time' => 'required',
        ];
    }
}
