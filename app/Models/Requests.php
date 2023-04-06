<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table = 'RequestsAdoptions';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_pet',
        'id_organization',
        'latitude',
        'longitude',
    ];

    public function users(){
        return $this->belongsto('App\Models\People','id_user','id');
    }

    public function pets(){
        return $this->belongsto('App\Models\Pets','id_pet','id');
    }

}


