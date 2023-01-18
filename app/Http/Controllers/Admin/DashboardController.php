<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Dashboard';
        $countArticle = collect(DB::select('SELECT getNewsCount() as NewsCount'))->first();
        $mostComment = collect(DB::select('SELECT getMostCommented() as MostComment'))->first();
        $countVisitor = collect(DB::select('SELECT getVisitorsCount() as VisitorsCount'))->first();
        $visitor = Visitor::selectRaw("coalesce(ip_address, '')")->orderBy('created_at', 'desc')->first();
        \Log::info('Num of Articles     : ' . json_encode($countArticle));
        \Log::info('Most Commented News : ' . json_encode($mostComment));
        \Log::info('Num of Visitors     : ' . json_encode($countVisitor));
        \Log::info('Latest Visitor      : ' . json_encode($visitor));
        return view('admin.dashboard', compact('title', 'countArticle', 'mostComment', 'countVisitor', 'visitor'));
    }
}
