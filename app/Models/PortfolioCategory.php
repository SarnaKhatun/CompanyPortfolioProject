<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];


    public static function saveCategoryData ($request, $id = null)
    {
        PortfolioCategory::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'status' => $request->status,
        ]);
    }
}
