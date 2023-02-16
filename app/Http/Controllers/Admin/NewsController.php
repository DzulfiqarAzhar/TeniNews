<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'News';
        $news = News::with('category')->get();
        \Log::info('news = '.$news);
        return view('admin.news', compact('title', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add News';
        $categories = Category::all();
        return view('admin.newsForm', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:10',
            'category' => 'required',
            'content' => 'required',
            'releaseDate' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        // $uplProc = new UploadController();
        // $contentFile   = $uplProc->prepareUpload($request, 'fileUpload', 'image');

        if ($validator->validated()) {
            $news = new News([
                'title' => $request->title,
                'category_id' => $request->category,
                'news_content' => $request->content,
                //'content_file' => $contentFile,
                'release_date' => $request->releaseDate
            ]);
            \Log::info($news);
            // if ($uplProc->processUpload($request->file('fileUpload'), $contentFile, 'file') == 0)
            $news->save();
            return redirect()->route('news.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
