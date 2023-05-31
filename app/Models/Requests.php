<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

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
        'interview',
        'latitude',
        'longitude',
        'address',
        'pet_delivered',
        'sign',
        'id_photo',
        'status'
    ];

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

    public function users(){
        return $this->belongsto('App\Models\People','id_user','id');
    }

    public function pets(){
        return $this->belongsto('App\Models\Pets','id_pet','id');
    }

    public function orgs(){
        return $this->belongsto('App\Models\User','id_organization','id');
    }


}


