<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentReplyModel extends Model
{
    use HasFactory;

    protected $table = 'blog_comment_reply';


    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

}
