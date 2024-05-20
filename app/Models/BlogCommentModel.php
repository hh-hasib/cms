<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentModel extends Model
{
    use HasFactory;

    protected $table = 'blog_comment';


    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function getReply()
    {
        return $this->hasMany(BlogCommentReplyModel::class, 'comment_id');
    }

}
