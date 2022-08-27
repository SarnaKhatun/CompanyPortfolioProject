<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'price',
      'description',
      'status',
    ];

    public static function savePriceData ($request, $id =null)
    {
        Price::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
        ]);
    }
}
