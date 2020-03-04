<?php
/**
 * Created by PhpStorm.
 * User: Sergey62
 * Date: 01.07.2019
 * Time: 10:18
 */
namespace App\Http\Controllers;


use App\Book;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class BookController extends Controller {

	/*public function _construct() {
		//$this->middleware('auth');
	}*/

	public function bookAll() {
		$books = Book::all();
		$link = '';
		//$linkBook = Storage::get($books->link);
		//$content = File::get('storage/app'.$books->link);
		//dump($content);
		/*$link = Storage::get($books->link);

		var_dump($link);
		exit();*/
		//$link = Storage::getFacadeRoot();
		$link = Storage::url($books->last()->link);
		//var_dump($link);
		//exit();
		return view('books', compact('books', 'link'));
	}

	public function add(Request $request) {
		$books = $request->all();

		if ($books) {
			$books['link'] = '';
			$book = new Book($books);
			$book->save();
			/*$lastId = $book->id;
			$ext = $request->file('link')->extension();
			$filenameId = $lastId.'.'.$ext;
			$book->link = $filenameId;*/
			//$book->update(['link', $request->file('link')->getClientOriginalName()]);
			if ($request->hasFile('link')) {
				/** @var File $link */
				//$link =  $request->file('link')->isValid;
				/*$path = $request->file('link')->path();
				$ext = $request->file('link')->extension();
				$filename = $request->file('link');*/
				$link = $request->file('link')->store('/books');
				$book->update([ 'link' => $link]);
				//dump($book);
				//$content = File::get('storage/app'.$link);
				//dump($content);
			}

			//$content = $request->file('link')->getRealPath();
			//dump($content);
			//Storage::disk('local')->put($request->link, 'Content');
		} else {
			throw new \LogicException("Запрос пустой");
		}
		return redirect('/books');
	}

	public function update(Request $request, $id) {
		//$idBook = $request->get('id');
		$book = Book::findOrFail($id);
		if ($request->isMethod('post')) {
			$book->update();
		}
		return redirect('/books');
	}

	public function download(Request $request, $id) {
		dump($id);
		return redirect('/books');
	}
}