<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signin extends Model
{
    use HasFactory;

    protected $fillable = [
        'OTP',
        'try_count',
        'OTP_time'
    ];

    public function employee(){
    	return $this->belongsTo(Employee::class);
    }
}
