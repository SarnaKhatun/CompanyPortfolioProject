<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Portfolio extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'title',
        'author_id',
        'description',
        'image',
        'status',
    ];


    public static function savePortfolioData($request, $id = null)
    {
        Portfolio::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author_id' => Auth::id(),
            'description' => $request->description,
            'image' =>Helper::uploadImage($request->file('image'), 'portfolio/img/', isset($id) ? Portfolio::where('id', $id)->first()->image : null),
            'status' => $request->status,
        ]);
    }


    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
