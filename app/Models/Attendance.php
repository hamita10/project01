<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'date', 
        'attendance',
        
        ];

        public function asign() {

            return $this->belongsTo(Asign::class ,'student_id','id');
    
            }
}
