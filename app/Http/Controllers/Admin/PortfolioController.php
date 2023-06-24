<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Portfolio::all();

        return view('pages.admin.portfolio.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/portfolio', 'public'
        );

        Portfolio::create($data);
        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Portfolio::findOrFail($id);

        return view('pages.admin.portfolio.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PortfolioRequest $request, string $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/portfolio', 'public'
        );

        $item = Portfolio::findOrFail($id);

        $item->update($data);

        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Portfolio::findOrFail($id);
        $item->delete();

        return redirect()->route('portfolio.index');
    }
}
