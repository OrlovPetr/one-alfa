<?php

namespace App\Http\Controllers;

use App\Page;
use App\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function execute() {
//        database requests
        $pages = Page::where('page_alias', '')->first();
        $services = Service::all();
        $links = Page::where('page_prefix', '')->get();

        $array = [
            'pages' => $pages,
            'services' => $services,
            'links' => $links
        ];

        return view('index', $array);
    }
}
