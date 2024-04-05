<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionCreateRequest extends FormRequest
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
        'course' => 'required',
        'date' => 'required',
        'name' => 'required',
        'DateOfBirth' => 'required',
        'age' => 'required',
        'qualification' => 'required',
        'landline' => 'required',
        'address' => 'required',
        'mobile' => 'required',
        'email' => 'required',
        'fathername' => 'required',
        'FatherMobileNo' => 'required',
        'FatherQualification' => 'required',
        'FatherOccupation' => 'required',
        'NameOfMother' => 'required',
        'MotherMobileNo' => 'required',
        'MotherQualification' => 'required',
        'MotherOccupation' => 'required',
        'ContactAnyEmergency' => 'required',
        'Fees' => 'required',
        'Paidfees' => 'required',
        'instollment' => 'required',
        'CenterRegCode' => 'required',
        'StudentRegCode' => 'required',
        'batch_id' => 'required',
        ];
    }
}
