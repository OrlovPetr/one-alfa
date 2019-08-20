<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class ContactsPageController extends Controller
{
    public function execute() {
        $pages = Page::where('page_alias', 'contacts')->first();
        $links = Page::where('page_prefix', '')->get();

        $array = [
            'pages' => $pages,
            'links' => $links
        ];

        return view('contacts', $array);
    }
}
