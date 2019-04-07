<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;


class AppController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('home',['books'=>$books]);
    }
    public function newBookForm(){
        return view('newbookform', [
            'categories' => Category::all()->sortBy('title'),
        ]);
    }
    public function newCategoryForm(){
        return view('newcategoryform');
    }
    public function newKeywordForm(){
        return view('newkeywordform');
    }
    public function createBook(Request $request){
        $request->validate([
            'category'=>'required',
            'name'=>'required',
            'author'=>'required|string',
            'publisher'=>'required|string',
            'ISBN'=>'required|numeric',
            'barcode'=>'numeric',
            'keywords'=>'required',
        ]);
        $book = new Book([
            'category_id' => $request->input('category'),
            'name'=> $request->input('name'),
            'author' => $request->input('author'),
            'publisher' => $request->input('publisher'),
            'ISBN' => $request->input('ISBN'),
            'barcode' => $request->input('barcode'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
        ]);
        $book->save();
        return redirect()->route('home');
    }
    public function createCategory(Request $request){
        $category = new Category([
            'title'=> $request->input('title'),
        ]);
        $category->save();
        return redirect()->route('home');
    }
    public function editBookForm($id){
        $book = Book::findOrFail($id);
        return view('edit',['book'=>$book,'categories' => Category::all()->sortBy('title')]);
    }
    public function editBook(Request $request){
        $request->validate([
            'category'=>'required',
            'name'=>'required',
            'author'=>'required|string',
            'publisher'=>'required|string',
            'ISBN'=>'required|numeric',
            'barcode'=>'numeric',
            'keywords'=>'required',
        ]);
        $book = Book::findOrFail($request->input('id'));
        $book->category->id = $request->input('category');
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->publisher = $request->input('publisher');
        $book->ISBN = $request->input('ISBN');
        $book->barcode = $request->input('barcode');
        $book->keywords = $request->input('keywords');
        $book->save();
        return redirect()->route('home')->with('info','One item edited successfully');;
    }
    public function deleteBook($id){
        $book = Book::findOrFail($id);
        if ($book != null) {
            $book->delete();
            $book->category()->delete();
            return redirect()->route('home')->with('info','The book is deleted successfully');
        }
        return redirect()->route('home')->with('info','An error ouccer');
    }
    
}
