<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
    use HasFactory;

    protected $table = 'page';

    static public function getSingle($id)
    {
        return PageModel::find($id);
    }

    static public function getRecord()
    {
        return self::get();
    }

    static public function getSlug($slug)
    {
        return PageModel::where('slug','=',$slug)->first();
    }
}
