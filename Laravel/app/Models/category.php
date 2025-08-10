<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    public function posts(){
        return $this->belongsToMany(Post::class, 'category_post', 'post_id', 'category_id');
    }
}
