<?php
/**
 * Created by PhpStorm.
 * User: Sergey62
 * Date: 01.07.2019
 * Time: 10:18
 */
namespace App\Http\Controllers;


use App\Book;
use Illuminate\Validation\Validator;

class BookController extends Controller {

	public function _construct() {
		$this->middleware('auth');
	}

	public function bookAll() {
		$books = Book::all();
		return view('books', compact('books'));
	}

	public function add() {
		$book = new Book();
		$book->save();
		return redirect('/books');
	}

}