<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createCategory(){
        return view('createCategory');
    }

    public function storeCategory(Request $request){
        
        $request-> validate([
            'Name' => 'required|unique:books,Name,except,id',
            'PublicationDate' =>'required', 
            'Stock' => 'required|integer|gt:5',
            'Author' => 'required|min:5|max:20',
            'Image' => 'required|mimes:png,jpg',
        ]);

        Category::create([
            'CategoryName' => $request->CategoryName,
        ]);
        return redirect('/');
    }
}
