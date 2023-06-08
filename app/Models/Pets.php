<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

class Pets extends Model
{
    protected $table = 'Pets';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
            'name'              ,
            'photo'          ,
            'image'           ,
            'description'      ,
            'chronic_disease'  ,
            'gender'           ,
            'birthday'          ,
            'specie'           ,
            'latitude',
            'longitude',
            'sterelized'       ,
            'sterelized_date'  ,
            'breed'            ,
            'size'             ,
            'color_necklace'   ,
            'weight'           ,
            'id_organization'  ,
            'status'            ,
    ];

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

    use HasFactory;
}
