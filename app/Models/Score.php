<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Score extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name' , 'score' , 'subject_id' , 'description'
    ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
