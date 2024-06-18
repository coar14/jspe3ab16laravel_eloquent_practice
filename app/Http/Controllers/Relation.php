<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class Relation extends Controller
{
    public function getBooksByAuthor($authorID){
        $author = Author::findOrFail($authorID);
        
        $books = $author->books;
        //dd($books); --there's something to return

        return view('author.allbooks',compact('author','books')); //this will create an array in thsi view

    }
}
