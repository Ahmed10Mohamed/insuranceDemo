<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|Order[] $orders
 */
class Company extends Model
{

    protected $fillable = [
        'user_id',
        'companyName',
        'commercialNumber',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
  

}