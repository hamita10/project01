<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thoughts extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'image',
        'description',
        
     ];
     public function Admission() {

        return $this->belongsTo(Admission::class ,'student_id','id');

        }
}
