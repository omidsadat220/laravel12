<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use App\Models\Test;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Redis;


use Faker\Guesser\Name;


class TestController extends Controller
{

    public function AllCateogry(){
        $allCategory = Test::get();

        return view('category.all',compact('allCategory'));
    }

    public function AddCateogry(){
        return view('category.add');
    }

    public function StoreCategory(Request $request){
        if($request->file('photo')){
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('photo')->getClientOriginalExtension();
            $image = $manager->read($request->file('photo'));
            $image->resize(200,200);
            $image->toJpeg(8)->save(public_path('image/'.$name_gen));
            $image_url = 'image/'.$name_gen;
            Test::insert([
                'category' => $request->name,
                'photo' => $image_url,
            ]);
        }

        

        return 'data add successfullay';
    }

    public function test(Request $request){
        if($request->file('image')){
            $image_manager = new ImageManager(new Driver());
            // getClindeExtentiono
            // read image from file system
            $image = $image_manager->read($request->file('image'));
        }
    }
    // End Categoyr

    public function AllSubCateogry(){
        return view('subcategory.all');
    }

    public function AddSubCateogry(){
        $subcategory = Test::latest()->get();
        return view('subcategory.add',compact('subcategory'));
    }

    public function StoreSubCategory(Request $request){
        SubCategory::insert([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('all.subcategory');
    }

}
