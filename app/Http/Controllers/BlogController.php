<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\BlogModel;
use App\Models\BlogTagsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function blog()
    {
        $data['getRecord'] = BlogModel::getRecord();
        return view('backend.blog.list', $data);
    }

    public function add_blog()
    {
        $data['getCategory'] = CategoryModel::getCategory();
        return view('backend.blog.add', $data);
    }

    public function insert_blog(Request $request)
    {
        $save = new BlogModel;
        $save->user_id = Auth::user()->id;
        $save->title = trim($request->title);
        $save->category_id = trim($request->category_id);
        $save->description = trim($request->description);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords = trim($request->meta_keywords);
        $save->is_publish = trim($request->is_publish);
        $save->status = trim($request->status);
        $save->save();

        $slug = Str::slug($request->title);

        $checkSlug = BlogModel::where('slug', '=', $slug)->first();
        if (!empty($checkSlug)) {
            $dbslug = $slug . '-' . $save->id;
        } else {
            $dbslug = $slug;
        }

        $save->slug = $dbslug;

        if (!empty($request->file('image_file'))) {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $dbslug . '.' . $ext;
            $file->move('upload/blog/', $filename);
            $save->image_file = $filename;
        }

        $save->save();

        BlogTagsModel::InsertDeleteTag($save->id, $request->tags);

        return redirect('panel/blog/list')->with('success', 'Blog successfully created');
    }

    public function edit_blog($id)
    {
        $data['getCategory'] = CategoryModel::getCategory();
        $data['getRecord'] = BlogModel::getSingle($id);
        return view('backend.blog.edit', $data);
    }


    public function update_blog($id, Request $request)
    {

        $save = BlogModel::getSingle($id);
        $save->title = trim($request->title);
        $save->category_id = trim($request->category_id);
        $save->description = trim($request->description);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords = trim($request->meta_keywords);
        $save->is_publish = trim($request->is_publish);
        $save->status = trim($request->status);

        if (!empty($request->file('image_file'))) {
            if (!empty($save->getImage())) {
                unlink('upload/blog/' . $save->image_file);
            }

            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $save->slug . '.' . $ext;
            $file->move('upload/blog/', $filename);
            $save->image_file = $filename;
        }

        $save->save();

        BlogTagsModel::InsertDeleteTag($save->id, $request->tags);

        return redirect('panel/blog/list')->with('success', 'Blog successfully updated');
    }

    public function delete_blog($id)
    {
        $save = BlogModel::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect()->back()->with('success', 'Blog successfully deleted');
    }

}
