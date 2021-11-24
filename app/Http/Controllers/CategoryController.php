<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);
        $request_data = $request->all();

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/category_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();


        }//end of if



        Category::create($request_data);
        session()->flash('success', 'Ajouter avec success');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate( [
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);
        $request_data = $request->all();

        if ($request->image) {

            $path=public_path('uploads/category_images/' . $category->image);
            unlink($path);

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/category_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $category->update($request_data);
        session()->flash('success', __('Modifier avec succés'));
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $path=public_path('uploads/category_images/' . $category->image);
        unlink($path);

        $offres=DB::table('offres')->where('category_id', $category->id)->get();
        foreach($offres as $offre){
            DB::table('cards')->where([['offre_id', $offre->id],['status', '=','0'],])->delete();
        }
        DB::table('offres')->where('category_id', $category->id)->delete();

        $category->delete();
        session()->flash('success', __('Supprimer avec succés'));
        return redirect()->route('categories.index');
    }

}
