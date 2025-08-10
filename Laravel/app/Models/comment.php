<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';

    public function post() {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    use HasFactory,SoftDeletes;
}
