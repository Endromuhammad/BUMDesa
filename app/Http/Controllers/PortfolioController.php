<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolios = Portfolio::all();
        $page = "portofolio";
        return view('admin.contents.portofolio.portofolio', ['page' => $page, 'portofolios' => $portofolios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = "portofolio";
        return view('admin.contents.portofolio.portofolio-create', ['page' => $page]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => ['required'],
            'description'   => ['required'],
            'category'      => ['required'],
            'project_date'  => ['required']
        ]);

        $file = $request->file('image_portofolio');
        $filename = str_replace(" ", "_", $request->post('title')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file->extension();

        $path = 'public/images/portofolio';

        $path = $file->storeAs($path, $filename);
        
        if ( ! $path ) {
            echo "error upload";exit;
        }

        $portfolioData = array(
            'title'             => $request->post('title'),
            'description'       => $request->post('description'),
            'category'          => $request->post('category'),
            'project_date'      => $request->post('project_date'),
            'image_path'        => $path
        );

        $create = Portfolio::create($portfolioData);

        if ( !$create ) {
            echo "error create";exit;
        }
 
        return redirect()->route('portofolio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portofolio = Portfolio::find($id);
        $page = "portofolio";
        
        $portofolio->image_path = Storage::url($portofolio->image_path);
        
        return view('admin.contents.portofolio.portofolio-view', ['page' => $page, 'portofolio' => $portofolio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portofolio = Portfolio::find($id);
        $page = "portofolio";

        $portofolio->image_path = Storage::url($portofolio->image_path);
        
        return view('admin.contents.portofolio.portofolio-edit', ['page' => $page, 'portofolio' => $portofolio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portofolio = Portfolio::find($id);
        $path = NULL;

        if (! empty($request->file('image_portofolio'))) {
            $file = $request->file('image_portofolio');
            $filename = $request->post('title') . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file->extension();
            $path = 'public/images/portofolio';
            $path = $file->storeAs($path, $filename);

            if ( ! $path ) {
                echo "error upload";
                exit;
            }
        }

        $portofolio->title        = $request->post('title');
        $portofolio->description  = $request->post('description');
        $portofolio->category     = $request->post('category');
        $portofolio->project_date = $request->post('project_date');

        if ($path) {
            $portofolio->image_path = $path;
        }

        if (! $portofolio->save() ) {
            echo "error update";
            exit;
        }

        return redirect()->route('portofolio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portofolio = Portfolio::find($id);

        if (! $portofolio->delete() ) {
            echo "delete failed";
        }

        return redirect()->route('portofolio');
    }
}
