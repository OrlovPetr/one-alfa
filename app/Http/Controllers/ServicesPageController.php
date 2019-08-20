<?php

namespace App\Http\Controllers;

use App\Page;
use App\Service;
use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    public function execute()
    {
// database request
        $pages = Page::where('page_alias', 'services')->first();
        $services = Service::all();
        $links = Page::where('page_prefix', '')->get();

        $array = [
            'pages' => $pages,
            'services' => $services,
            'links' => $links
        ];

        return view('services', $array);
    }
}
