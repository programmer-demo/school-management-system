<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name' , 'gender' , 'address' , 'image' , 'subject_id' , 'student_id' , 'room_id'
    ];
    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function room()
    {
        return $this->hasMany(Teacher_in_Room::class);
    }
}
