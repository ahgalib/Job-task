<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryImage;


class FrontEndController extends Controller
{
    public function show(Request $request){
        $category = Category::all();
        $image = CategoryImage::all();
        return view('index',compact('category','image'));
    }

    //show all data in ajax
    public function showDataInAjax(Request $request){
        //common veriable for showing category image
        $category_show = "";

        if($request->filterValue == '*'){
            $category = CategoryImage::all();
            foreach($category as $categories){
                $category_show.= "
                <div class='grid-item col-lg-4 col-sm-6 animal'>
                    <a href='#!' class='portfolio__card position-relative d-inline-block w-100'>
                        <img src='/upload/categories/{$categories->image}' alt='Random Image' class='w-100'>
                    </a>
                </div>";
            }
        }else{
            $category = CategoryImage::where('category_id',$request->filterValue)->get();
            foreach($category as $categories){
                $category_show.= "
                <div class='grid-item col-lg-4 col-sm-6 animal'>
                    <a href='#!' class='portfolio__card position-relative d-inline-block w-100'>
                        <img src='/upload/categories/{$categories->image}' alt='Random Image' class='w-100'>
                    </a>
                </div>";
            }
        }
        echo $category_show;
    }
}



