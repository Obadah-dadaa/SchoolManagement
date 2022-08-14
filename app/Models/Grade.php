<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Grade extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table='grades';
    protected $fillable = [
        'name'
    ];

    protected $hidden = [

    ];

    public $timestamps = false;
    public $incrementing = true;

    public function setCreatedAtAttribute($value) {
        $this->attributes['created_at'] = Carbon::now();
    }

    public function setUpdatedAtAttribute($value) {
        $this->attributes['updated_at'] = Carbon::now();
    }

    public function section()
    {
        return $this->belongsToMany(Section::class, 'sectionsgrades', 'grade_id', 'section_id');
    }
    public function subject()
    {
        return $this->belongsToMany(Subject::class, 'subjectsgrades', 'grade_id', 'subject_id');
    }
    public function student(){
        return $this->hasMany(Student::class, 'grade_id', 'id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'grade_id', 'id');
    }

    public function sectionsgrades(){
        return $this->hasMany(Sectionsgrade::class, 'grade_id', 'id');
    }
}

