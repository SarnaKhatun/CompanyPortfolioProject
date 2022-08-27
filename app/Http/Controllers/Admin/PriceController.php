<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function addPrice ()
    {
        return view('admin.price.add');
    }

    public function newPrice (Request $request)
    {
        Price::savePriceData($request);
        return back()->with('message', 'Price data added successfully');
    }
    public function managePrice ()
    {
        return view('admin.price.manage', [
            'prices' => Price::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editPrice ($id)
    {
        return view('admin.price.edit', [
            'price' => Price::find($id),
        ]);
    }

    public function updatePrice (Request $request, $id)
    {
        Price::savePriceData($request, $id);
        return redirect('/manage-price')->with('message', 'Price data updated successfully');
    }




    protected static $price;

    public function deletePrice (Request $request, $id)
    {
       self::$price = Price::where('id', $id)->first()->delete();
       return back()->with('message', 'Price data deleted successfully');
    }

    public function changeStatus ($id)
    {
        $changeItem = Price::find($id);
        $changeItem->status = $changeItem->status == 1 ? '0' : '1';
        $changeItem->save();
        return back()->with('message', 'Price status changed successfully ');
    }


}
