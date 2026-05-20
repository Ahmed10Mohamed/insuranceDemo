<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Passport\HasApiTokens;

/**
 * @property-read City $city
 * @property-read userType $userType
 * @property-read Company $company
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable,HasFactory,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        'fullName',
        'userName',
        'isActive',
        'otp',
        'isApprove',
        'email',
        'image',
        'phone',
        'password',
        'user_type_id',
        'access_token',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'isActive' => 'boolean',
            'isApprove' => 'boolean',
        ];
    }
   
    public function scopeIsApprove(Builder $query): Builder
    {
        return $query->where('isApprove',true);
    }
    public function scopeIsActive(Builder $query): Builder
    {
        return $query->where('isActive',true);
    }
    public function scopeisNotActive(Builder $query): Builder
    {
        return $query->where('isActive',false);
    }
  
   public function userType()
   {
       return $this->belongsTo(userType::class);
   }
  
   public function company()
   {
       return $this->hasOne(Company::class);
   }


}