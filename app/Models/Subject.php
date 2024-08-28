<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name' , 'level' , 'status'
    ];
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
