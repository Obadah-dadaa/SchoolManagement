<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table='students';
    protected $fillable = [
        'first_name', 'last_name', 'parent_id', 'grade_id', 'section_id', 'bus_subscribe'
    ];
    protected $casts = [
        ' bus_subscribe' => 'boolean',
    ];

    public $timestamps = true;
    public $incrementing = true;

    public function setCreatedAtAttribute($value) {
        $this->attributes['created_at'] = Carbon::now();
    }

    public function setUpdatedAtAttribute($value) {
        $this->attributes['updated_at'] = Carbon::now();
    }

    public function exam()
    {
        return $this->hasMany(Exam::class, 'student_id', 'id');
    }
    public function absence()
    {
        return $this->hasMany(Absence::class, 'student_id', 'id');
    }

    public function financialFee()
    {
        return $this->hasMany(FinancialFee::class, 'student_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parent_id');
    }
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

}

