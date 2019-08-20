<?php

namespace App\Http\Controllers;

use App\Page;
use App\Service;
use Illuminate\Http\Request;

class ServiceDescPageController extends Controller
{
    public function execute($page) {
//        database request
        $pages = Page::where('page_alias', 'service')->first();
        $service = Service::where('service_alias', $page)->first();
        $links = Page::where('page_prefix', '')->get();

        $array = [
            'pages' => $pages,
            'service' => $service,
            'links' => $links
        ];

        return view('service', $array);
    }
}
