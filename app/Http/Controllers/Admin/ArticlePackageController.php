<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticlePackageRequest;
use App\Models\ArticlePackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticlePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ArticlePackage::all();

        return view('pages.admin.article-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.article-package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticlePackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        ArticlePackage::create($data);
        return redirect()->route('article-package.index');
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
        $item = ArticlePackage::findOrFail($id);

        return view('pages.admin.article-package.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticlePackageRequest $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = ArticlePackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('article-package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ArticlePackage::findOrFail($id);
        $item->delete();

        return redirect()->route('article-package.index');
    }
}
