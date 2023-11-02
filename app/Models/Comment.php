<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'number_of_child_comments'
    ];
    public function childComment () : HasMany
    {
        return $this->hasMany(ChildComment::class, 'parent_comment_id');
    }
}
