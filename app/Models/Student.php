<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name' , 'gender' , 'date_of_birth' , 'place_of_birth' , 'image' , 'status' , 'payment_id' , 'user_id'
    ];
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
