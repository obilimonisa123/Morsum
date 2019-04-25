<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookShelf;

class BookShelfController extends Controller
{
    public function index(BookShelf $bookshelf)
    {
    	return view('bookshelf.index',compact('bookshelf'));
    	
    }
    public function create()
    {
    return view('bookshelf.create');	
    }
    public function store(Request $request)
    {

			 $BookShelf= new BookShelf();
    		
   		
		  $BookShelf->book_name = $request->book_name;
		  $BookShelf->save();
          return redirect('/bookshelf');
		
    }
    public function json()
    {
        return BookShelf::all();
    }

    public function edit(BookShelf $bookshelf)
    {
        return view('bookshelf.edit',compact('bookshelf'));
    }
    public function update(Request $request,BookShelf $bookshelf)
    {
        return redirect('/bookshelf');
    }
    public function destroy(BookShelf $bookshelf)
    {
         $bookshelf->delete();
          return redirect('/bookshelf');
    }

}
