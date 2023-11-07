<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
// this is called OOP 
// here class is function which contains various things like method variables functions here method are function
{
    //when we want data from form we request to the form so laravel provide dependency injection(Request)
    public function insertProduct(Request $req){
        $formFields = $req->validate([
        "name"=> ['required','string' ,'min:3','max:20'],
        'price'=> ['required','min:3','max:5'],
        'desc'=> ['required','min:5'],
        'category'=> ['required','string'],
        'image'=> ['required','mimes:jpg,png'],
        ]);
        //store the image in a new folder
        $formFields['image']= $req ->file('image')->store('product_images','public');
        Product::create($formFields);
        return back()->with('message','Product added successfully!!');


    }
}
