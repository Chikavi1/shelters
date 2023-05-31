<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hashids\Hashids;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Organizations';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'name'           ,
        'email'          ,
        'password'       ,
        'person_name'    ,
        'cellphone'      ,
        'volunteers'     ,
        'description'    ,
        'address'        ,
        'latitude'       ,
        'longitude'      ,
        'address'        ,
        'social_media'   ,
        'cover'          ,
        'photo'          ,
        'score'          ,
        'type'           ,
        'count_changes'  ,
        'verified'       ,
        'configuration'  ,
        'status'
    ];

        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
