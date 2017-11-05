<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'contact_name',
        'contact_phone',
        'contact_email',
        'hosting',
        'dashboard',
        'ssl',
        'sslexpire',
        'wordpress',
        'cost',
        'due_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
