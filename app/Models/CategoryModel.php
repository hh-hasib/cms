<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'category';

    static public function getSingle($id)
    {
        return CategoryModel::find($id);
    }

    static public function getRecord()
    {
        return self::select('category.*')
            ->where('is_delete', '=', 0)
            ->orderBy('id', 'desc')
            ->paginate(30);
    }

    static public function getCategory()
    {
        return self::select('category.*')
            ->where('status', '=', 1)
            ->where('is_delete', '=', 0)
            ->get();
    }


    public function totalBlog()
    {
        return $this->hasMany(BlogModel::class, 'category_id')
            ->where('blog.status', '=', 1)
            ->where('blog.is_publish', '=', 1)
            ->where('blog.is_delete', '=', 0)
            ->count();
    }

    static public function getCategoryMenu()
    {
        return self::select('category.*')
            ->where('status', '=', 1)
            ->where('is_menu', '=', 1)
            ->where('is_delete', '=', 0)
            ->get();
    }


    static public function getSlug($slug)
    {
        return self::select('category.*')
            ->where('slug', '=', $slug)
            ->where('status', '=', 1)
            ->where('is_delete', '=', 0)
            ->first();
    }


}
