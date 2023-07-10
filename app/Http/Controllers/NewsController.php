<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $news = News::getAllNews();
        $page = "berita";
        return view('admin.contents.berita.berita', ['page' => $page, 'news_list' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = "berita";
        return view('admin.contents.berita.berita-create', ['page' => $page]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => ['required'],
            'content'   => ['required']
        ]);

        $file = $request->file('image_news');
        $filename = str_replace(" ", "_", $request->post('title')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file->extension();

        $path = 'public/images/news';

        $path = $file->storeAs($path, $filename);
        
        if ( ! $path ) {
            echo "error upload";exit;
        }

        $newsData = array(
            'title'             => $request->post('title'),
            'content'           => $request->post('content'),
            'image_upload_path' => $path,
            'created_by'        => Auth::id()
        );

        $create = News::create($newsData);

        if ( !$create ) {
            echo "error create";exit;
        }
 
        return redirect()->route('berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);
        $page = "berita";
        
        $news->image_upload_path = Storage::url($news->image_upload_path);
        
        return view('admin.contents.berita.berita-view', ['page' => $page, 'news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::find($id);
        $page = "berita";

        $news->image_upload_path = Storage::url($news->image_upload_path);
        
        return view('admin.contents.berita.berita-edit', ['page' => $page, 'news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::find($id);
        $path = NULL;

        if (! empty($request->file('image_news'))) {
            $file = $request->file('image_news');
            $filename = $request->post('title') . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file->extension();
            $path = 'public/images/news';
            $path = $file->storeAs($path, $filename);

            if ( ! $path ) {
                echo "error upload";
                exit;
            }
        }

        $news->title = $request->post('title');
        $news->content = $request->post('content');

        if ($path) {
            $news->image_upload_path = $path;
        }

        if (! $news->save() ) {
            echo "error update";
            exit;
        }

        return redirect()->route('berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);

        if (! $news->delete() ) {
            echo "delete failed";
        }

        return redirect()->route('berita');
    }

    public function userNews() : View {
        echo 1;
    }
}
