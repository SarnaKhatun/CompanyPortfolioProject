<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'short_description',
        'long_description',
        'image',
        'status',
    ];


    public static function saveServiceData($request, $id = null)
    {
        Service::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' =>Helper::uploadImage($request->file('image'), 'service/img/', isset($id) ? Service::where('id', $id)->first()->image : null),
            'status' => $request->status,
        ]);
    }


    public function category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

}
