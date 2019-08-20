<?php

namespace App\Http\Controllers;

use App\Page;
use App\Portfolio;
use Illuminate\Http\Request;

class WorkDescPageController extends Controller
{
    public function execute($page) {
        $work = Portfolio::where('portfolio_alias', $page)->first();
        $works = Portfolio::all();
        if($work->id == 1) {
            $prevId = count($works);
            $nextId = 2;
        } elseif ($work->id == (count($works))) {
            $prevId = $work->id - 1;
            $nextId = 1;
        } else {
            $prevId = $work->id - 1;
            $nextId = $work->id + 1;
        }
        $next_work_alias = Portfolio::where('id', $nextId)->value('portfolio_alias');
        $prev_work_alias = Portfolio::where('id', $prevId)->value('portfolio_alias');
        $links = Page::where('page_prefix', '')->get();
        $pages = Page::where('page_alias', 'work')->first();

        $array = [
            'work' => $work,
            'next_work_alias' => $next_work_alias,
            'prev_work_alias' => $prev_work_alias,
            'links' => $links,
            'pages' => $pages
        ];

        return view('work', $array);
    }
}
