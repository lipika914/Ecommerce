<?php

namespace App\Http\Controllers;
use App\Book_Bank;

use Illuminate\Http\Request;

class SearchController extends Controller
{
	 public function search(Request $request)
    {
       $name = $request->name;
        if(isset($name) && !empty($name)){
            $data['info'] = Book_Bank::where('name','LIKE','%'. $name.'%')
                ->orWhere('name','LIKE','%'. $name.'%')
                ->orWhere('image','LIKE','%'. $name . '%' )
                ->orWhere('description','LIKE','%'. $name. '%' )
                ->orWhere('price','LIKE','%'. $name. '%' )
                ->orWhere('status','LIKE','%'. $name . '%' )
                ->get();
     }

        return view('main.search',$data);
    }
    }
