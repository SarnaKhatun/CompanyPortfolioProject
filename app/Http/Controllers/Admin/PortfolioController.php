<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolio.manage', [
            'portfolios' => Portfolio::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.add', [
            'portfolioCategories' => PortfolioCategory::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Portfolio::savePortfolioData($request);
        return back()->with('message', 'Portfolio data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.portfolio.edit', [
            'portfolioCategories' => PortfolioCategory::latest()->get(),
            'portfolio' => Portfolio::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Portfolio::savePortfolioData($request, $id);
        return redirect(route('portfolios.index'))->with('message', 'Portfolio data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if (file_exists($portfolio->image))
        {
            unlink($portfolio->image);
        }
        $portfolio->delete();
        return back()->with('message', 'Portfolio data deleted successfully');
    }



    protected static $changeItem;

    public function changeStatus($id)
    {
        self::$changeItem = Portfolio::find($id);
        self::$changeItem->status = self::$changeItem->status == 1 ? '0' : '1';
        self::$changeItem->save();
        return back()->with('message', 'Portfolio status changed successfully');
    }
}
