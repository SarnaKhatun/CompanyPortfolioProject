<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'author_id',
        'short_description',
        'long_description',
        'image',
        'status',
    ];


    public static function saveBlogData($request, $id = null)
    {
        Blog::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author_id' => Auth::id(),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' =>Helper::uploadImage($request->file('image'), 'blog/img/', isset($id) ? Blog::where('id', $id)->first()->image : null),
            'status' => $request->status,
        ]);
    }


    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }


}
