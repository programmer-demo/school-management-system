<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name' , 'schedule' , 'teacher_id'
    ];
    public function teacher()
    {
        return $this->hasMany(Teacher_in_Room::class);
    }
}
