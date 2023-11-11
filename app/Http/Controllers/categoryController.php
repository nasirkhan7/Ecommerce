<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(Request $req){
        $formFields=$req ->validate(
            [
                'name'=>['required'],
                'image'=>['required','mimes:png,jpg,jpeg']
            ]);
            $formFields['image']=$req->file('image')->store('category_image','public');
            Category::create($formFields);
            return back()->with('message','Category Added Successfully');
    }
}
