<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsychologicalCounselor extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table='psychological_counselors';
    protected $guard='psychological_counselor';

    protected $fillable = [
        'name', 'email', 'password', 'phone_number'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;
    public $incrementing = true;

    public function consult(){
        return $this->hasMany(Consult::class, 'PsychologicalCounselor', 'id');
    }
}
