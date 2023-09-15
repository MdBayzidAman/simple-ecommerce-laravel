<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_data = category::get();
        $first_categories = category::where('parent', '0')->get();
        return view('adminPage.category.ViewCategories', compact('category_data', 'first_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category_data = category::get();
        $first_categories = category::where('parent', '0')->get();
        return view('adminPage.category.addCategories', compact('category_data', 'first_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'parent' => 'required',
            'category' => 'required',
            'disc' => 'required|max:250',
            'category_img' => 'required',
        ]);
        // category id handel
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
        $random_string = '';
        for ($i = 0; $i < 3; $i++) {
            $random_string .= $characters[rand(0, strlen($characters) - 1)];
        }
        $random_string .= date('mi');

        // image handel
        $imageName = $random_string . date('dmy') . '.' . $request->category_img->extension();
        $request->category_img->move(public_path('asset/image/category'), $imageName);

        $category = new category;
        $category->parent = $request->parent;
        $category->category_id = $random_string;
        $category->category = $request->category;
        $category->image = $imageName;
        $category->disc = $request->disc;
        $category->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = category::get();
        $first_categories = category::where('parent', '0')->get();
        $category_data = category::where('category_id', $id)->first();
        return view('adminPage.category.editCategory', compact('first_categories', 'category_data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => 'required',
            'disc' => 'required|max:250',
        ]);
        // image handel
        if (empty($request->category_img)) {
            $imageName = category::where('category_id', $id)->first()->image;
        } else {
            $imageName = $id . date('dmy') . '.' . $request->category_img->extension();
            $request->category_img->move(public_path('asset/image/category'), $imageName);
        }

        // update
        $category = category::where('category_id', $id)->first();
        $category->parent = $request->parent;
        $category->category_id = $id;
        $category->category = $request->category;
        $category->image = $imageName;
        $category->disc = $request->disc;
        $category->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = category::where('category_id', $id)->first();
        $image_path = public_path('asset/image/category/'.$categories->image);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $categories->delete();
        return back();
    }
}
