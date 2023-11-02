<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildComment extends Model
{
    protected $fillable = [
        'content',
        'parent_comment_id',
    ];

    public function comment () : BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
}
