<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailsUser extends Model
{
    protected $table = 'details_users';
    protected $primaryKey = 'id';
    protected $fillable = ['country','city','address','user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

