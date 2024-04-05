<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asign extends Model
{
    use HasFactory;

    protected $fillable = [
        'pc_no',
        'student_id', 
        'teacher_id',
        'subject_id',
        'batch_time',
        ];
        public function Admission() {

            return $this->belongsTo(Admission::class ,'student_id','id');
    
            }
         public function teacher() {
            
             return $this->belongsTo(User::class ,'teacher_id','id');
    
            }
            public function subject() {
            
                return $this->belongsTo(Subject::class ,'subject_id','id');
       
            }
            public function  batchtime () {
    
                return $this->belongsTo(BatchSystem::class ,'batch_time','id');
            }
}
