<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'Users';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';


    protected $fillable = [
        'name',
        'photo',
        'email',
        'cellphone',
        'notifications',
        'country',
        'currency',
        'interest',
        'coupon',
        'customer',
        'birthday',
        'gender'
];

    use HasFactory;

}
