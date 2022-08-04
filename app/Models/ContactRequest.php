<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;
    protected $table = 'contactrequests';

    public function location()
    {
    	return $this->belongsTo(Location::class);
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}
