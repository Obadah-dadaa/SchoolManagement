<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table='subjects';
    protected $fillable= [
        'name','grade_id',
        ];

    public function teacher()
    {
            return $this->belongsToMany(Teacher::class, 'teacherssubjects', 'teacher_id', 'subject_id');
    }

    public function grade()
    {
        return $this->belongsToMany(Grade::class, 'subjectsgrades', 'grade_id', 'subject_id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'subject_id', 'id');
    }
}
