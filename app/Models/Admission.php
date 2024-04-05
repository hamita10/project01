<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable = [
        'course',
        'date',
        'student_name',
        'birth_date',
        'instollmentmonth',
        'batch_id',
        'age',
        'qualification',
        'landline',
        'mobile_no',
        'email',
        'address',
        'father_name',
        'father_no',
        'father_qualification',
        'father_occupation',
        'mother_name',
        'mother_no',
        'mother_qualification',
        'mother_occupation',
        'emergency_no',
        'center_code',
        'student_code',
    ];
    public function  batchtime()
    {

        return $this->belongsTo(BatchSystem::class, 'batch_id', 'id');
    }
}
