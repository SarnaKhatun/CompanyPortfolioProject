<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider ()
    {
        return view('admin.slider.add');
    }

    public function manageSlider ()
    {
        return view('admin.slider.manage', [
            'sliders' => Slider::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function newSlider(Request $request)
    {
        Slider::saveSliderData($request);
        return back()->with('message', 'Slider data created successfully');
    }

    public function editSlider ($id)
    {
        return view('admin.slider.edit', [
            'slider' => Slider::where('id', $id)->first(),
        ]);
    }

    public function deleteSlider(Request $request, $id)
    {
        $slider = Slider::find($id);
        if (file_exists($slider->image))
        {
            unlink($slider->image);
        }
        $slider->delete();
        return back()->with('message', 'Slider data deleted successfully');
    }

    public function updateSlider(Request $request, $id)
    {
        Slider::saveSliderData($request, $id);
        return redirect('/manage-slider')->with('message', 'Slider data updated successfully');
    }




    protected $changeItem;

    public function changeStatus ($id)
    {
        $this->changeItem = Slider::find($id);
        $this->changeItem->status = $this->changeItem->status == 1 ? 0 : 1;
        $this->changeItem->save();
        return back()->with('message', 'Slider status changed successfully');
    }
}
