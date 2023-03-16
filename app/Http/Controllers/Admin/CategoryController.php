<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryImage;
use Image;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $category = Category::all();
        return view('admin.addCategory',compact('category'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:categories,name'
        ]);

        Category::create([
            'name' => $request->name,
        ]);
        return back()->with('success','Category added successfully');
    }

    public function categoryImageStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif'
        ]);

        $upload_file = $request->image;
        $extension = $upload_file->getClientOriginalExtension();
        $image_name = rand(22222,99999).'.'.$extension;
        Image::make($upload_file)->resize(380,500)->save(public_path('/upload/categories/'.$image_name));

        CategoryImage::create([
            'category_id' => $request->category_id,
            'image' => $image_name
        ]);
        return back()->with('cat_success','Category Image added successfully');
    }
}
