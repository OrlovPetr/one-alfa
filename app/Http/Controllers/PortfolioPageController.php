<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Portfolio;
use App\PortfolioImage;
use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function execute() {
        $pages = Page::where('page_alias', 'portfolio')->first();
        $portfolio = Portfolio::all();
        $links = Page::where('page_prefix', '')->get();
        $portfolio_category = Category::all();

        $array = [
            'pages' => $pages,
            'portfolio' => $portfolio,
            'links' => $links,
            'portfolio_category' => $portfolio_category,
        ];

        return view('portfolio', $array);
    }
}
