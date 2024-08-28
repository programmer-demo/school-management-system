<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'subject_id' , 'price' , 'user_id' , 'expire_date' , 'status'
    ];
    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function paymentDetail()
    {
        return $this->hasMany(PaymentDetail::class);
    }
}
