<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticlePackage;
use App\Models\Gallery;
use App\Models\Portfolio;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'article_package' => ArticlePackage::count(),
            'gallery' => Gallery::count(),
            'portfolio' => Portfolio::count(),
        ]);
    }
}
