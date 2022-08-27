<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'image',
      'description',
      'status',
    ];

    public static function saveSliderData($request, $id = null)
    {
        Slider::updateOrCreate(['id' => $id], [
            'title' => $request->title,
            'image' => Helper::uploadImage($request->file('image'), 'slider/img/', isset($id) ? Slider::find($id)->image : null),
            'description' => $request->description,
            'status' => $request->status,
        ]);
    }
}
