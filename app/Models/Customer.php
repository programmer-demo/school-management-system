<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'fullName' , 'first_name' , 'last_name' , 'gender' , 'text' , 'address' , 'text'  , 'chat_id'
    ];
}
