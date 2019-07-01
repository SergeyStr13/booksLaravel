<?php
/**
 * Created by PhpStorm.
 * User: Sergey62
 * Date: 01.07.2019
 * Time: 10:18
 */
namespace App\Http\Controllers;


use App\Book;

class BookController {

	public function bookAll() {
		$books = Book::all();
		return view('books', compact('books'));
	}
}