<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'views',
        'status',
        'user_id',
        'category_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }
}
